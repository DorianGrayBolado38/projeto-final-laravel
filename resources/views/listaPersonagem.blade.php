@extends('layout')

@section('content')

<h1>Lista de Personagens</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form method="GET" action="{{ route('lista-personagem') }}">
    <div class="mb-3">
        <label for="search" class="form-label">Pesquise o Cadastro de Personagens</label>
        <input type="text" class="form-control" id="search" name="nomePersonagem" required>
        <button type="submit" class="btn btn-outline-dark mt-2">Pesquisar</button>
        <a href="{{ route('lista-personagem') }}" class="btn btn-outline-dark mt-2">Voltar</a>
    </div>
</form>

<!-- Botão de Voltar -->


<div class="card-container">
    @foreach($registrosPersonagem as $personagem)
    <div class="card">
        <img src="{{ asset('storage/' . $personagem->imgPersonagem) }}" alt="{{ $personagem->nomePersonagem }}" class="card-img" data-toggle="modal" data-target="#modal-personagem" data-nome="{{ $personagem->nomePersonagem }}" data-data="{{ $personagem->dataPersonagem }}" data-obra="{{ $personagem->obraPersonagem }}">
        <div class="card-body">
            <h3 class="card-title">{{ $personagem->nomePersonagem }}</h3>
            <p class="card-text">Data de Criação: {{ $personagem->dataPersonagem }}</p>
            <p class="card-text">Obra: {{ $personagem->obraPersonagem }}</p>
            <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('altera-personagem', ['id' => $personagem->idPersonagem]) }}" class="btn btn-outline-primary bi bi-pen" title="Alterar"></a>
                <form method="POST" action="{{ route('apagar-personagem', ['id' => $personagem->idPersonagem]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este personagem?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal -->
<div class="modal fade" id="modal-personagem" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modal-img" src="" alt="" class="img-fluid">
                <p id="modal-data"></p>
                <p id="modal-obra"></p>
            </div>
        </div>
    </div>
</div>

<style>
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
}

.card {
    border: 1px solid #fff;
    border-radius: 10px;
    width: 200px; 
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.card-img {
    width: 100%;
    height: auto;
    cursor: pointer;
}
</style>

<script>
    // Script para atualizar o modal com as informações do personagem
    document.querySelectorAll('.card-img').forEach(img => {
        img.addEventListener('click', function() {
            const nome = this.getAttribute('data-nome');
            const data = this.getAttribute('data-data');
            const obra = this.getAttribute('data-obra');
            const src = this.src;

            document.getElementById('modalLabel').innerText = nome;
            document.getElementById('modal-img').src = src;
            document.getElementById('modal-data').innerText = 'Data de Criação: ' + data;
            document.getElementById('modal-obra').innerText = 'Obra: ' + obra;
        });
    });
</script>

@endsection
