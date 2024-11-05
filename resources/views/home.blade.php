@extends('layout')
@section('content')

<div class="card bg-dark text-white text-center">
  <img src="{{ asset('assets/imagens/home.png') }}" class="img-display" alt="card image">
  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
    <h5 class="card-title">Como funciona?</h5>
    <p class="card-text">A finalidade do site é uma só, cadastrar personagens do seu gosto. Feito o cadastro o personagem irá aparecer com um card apresentando suas informações</p>
    <a href="{{route('cadastro-personagem')}}" class="btn btn-outline-light">Cadastrar</a>
  </div>
</div>

<style>
   .img-display {
       width: auto; /* Ajuste a largura desejada */
       height: auto; /* Mantém a proporção da imagem */
       object-fit: cover; /* Corta a imagem se necessário */
   }
   .card{
    width: auto; /* Ajuste a largura desejada */
       height: auto; /* Mantém a proporção da imagem */
       object-fit: cover; /* Corta a imagem se necessário */
   }
   .card-title {
    font-size: 40px;
   }

   .card-text {
       font-size: 30px; /* Ajuste o tamanho da fonte conforme necessário */
   }
</style>

@endsection
