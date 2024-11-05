@extends('layout')
@section('content')

<form method="POST" action="{{ route('altera-personagem', ['id' => $registrosPersonagem->idPersonagem]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nomePersonagem" class="form-label">Nome do Personagem</label>
        <input type="text" class="form-control" id="nomePersonagem" name="nomePersonagem" value="{{ $registrosPersonagem->nomePersonagem }}" required>
    </div>
    <div class="mb-3">
        <label for="dataPersonagem" class="form-label">Data de Criação</label>
        <input type="date" class="form-control" id="dataPersonagem" name="dataPersonagem" value="{{ $registrosPersonagem->dataPersonagem }}" required>
    </div>
    <div class="mb-3">
        <label for="obraPersonagem" class="form-label">Obra</label>
        <input type="text" class="form-control" id="obraPersonagem" name="obraPersonagem" value="{{ $registrosPersonagem->obraPersonagem }}" required>
    </div>
    <div class="mb-3">
        <label for="imgPersonagem" class="form-label">Imagem</label>
        <input type="file" class="form-control" id="imgPersonagem" name="imgPersonagem">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection