<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PersonagensController extends Controller
{
    // Mostra a home
    public function MostrarHome()
    {
        return view('home');
    }

    // Para mostrar tela de cadastro de Personagem
    public function MostrarCadastroPersonagem()
    {
        return view('cadastroPersonagem');
    }

    public function CadastroPersonagem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomePersonagem' => 'string|required',
            'dataPersonagem' => 'date|required',
            'obraPersonagem' => 'string|required',
            'imgPersonagem' => 'file|required|mimes:jpeg,png,jpg,gif',
        ]);
    
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    
        // Salvar a imagem no diretório public/storage/imagens
        $path = $request->file('imgPersonagem')->store('imagens', 'public');
    
        // Criar o personagem
        Personagem::create(array_merge($request->all(), ['imgPersonagem' => $path]));
    
        return Redirect::route('lista-personagem')->with('success', 'Personagem cadastrado com sucesso!');
    }
    
    public function Update(Request $request, $id)
    {
        $personagem = Personagem::findOrFail($id);
    
        $validator = Validator::make($request->all(), [
            'nomePersonagem' => 'string|required',
            'dataPersonagem' => 'date|required',
            'obraPersonagem' => 'string|required',
            'imgPersonagem' => 'file|mimes:jpeg,png,jpg,gif|', // Opcional
        ]);
    
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    
        $personagem->fill($request->all());
        if ($request->hasFile('imgPersonagem')) {
            $path = $request->file('imgPersonagem')->store('imagens', 'public');
            $personagem->imgPersonagem = $path;
        }
        $personagem->save();
    
        return Redirect::route("lista-personagem")->with('success', 'Personagem atualizado com sucesso!');
    }
    
    //apagar personagem
    public function Destroy(Personagem $id)
    {
        $id->delete('idPersonagem');
        return Redirect::route('lista-personagem')->with('success', 'Personagem apagado com sucesso!');
    }

    

    // Para mostrar somente os Personagem por código 
    public function MostrarPersonagemCodigo(Personagem $id)
    {
        return view('alteraPersonagem', ['registrosPersonagem' => $id]);
    }

    // Para buscar os Personagem por nome
    public function MostrarPersonagemNome(Request $request)
{
    $registros = Personagem::query();
    
    // Verifica se o campo de busca foi preenchido
    if ($request->filled('nomePersonagem')) {
        $registros->where('nomePersonagem', 'like', '%' . $request->nomePersonagem . '%');
    }
    
    $todosRegistros = $registros->get();
    return view('listaPersonagem', ['registrosPersonagem' => $todosRegistros]);
}

}
