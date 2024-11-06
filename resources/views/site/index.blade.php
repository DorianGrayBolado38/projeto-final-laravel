<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home - Viagens</title>
    <style>
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Viajar Sempre</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrossel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/carrossel/imagem1.jpg" class="d-block w-100" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="imagens/carrossel/imagem2.jpg" class="d-block w-100" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="imagens/carrossel/imagem3.jpg" class="d-block w-100" alt="Imagem 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Cards de Produtos -->
    <div class="container mt-5">
        <h2 class="text-center m-5">Cidades para viajar</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagens/cards/foz-de-iguacu.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Foz de Iguaçu</h5>
                        <p class="card-text">Foz do Iguaçu é famosa por suas impressionantes Cataratas, uma das sete maravilhas naturais do mundo. Localizada na tríplice fronteira, a cidade oferece rica cultura, belezas naturais e experiências únicas. Explore o Parque Nacional e a vibrante vida local!</p>
                        <p class="card-text"><strong>R$ 100,00</strong></p>
                        <a href="descricao.html" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagens/cards/recife.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Recife</h5>
                        <p class="card-text">Recife, conhecida como a "Veneza Brasileira", encanta com seus canais e pontes. A cidade é rica em história e cultura, com atrações como o Instituto Ricardo Brennand e o Museu do Frevo. Suas praias, como Boa Viagem, e a deliciosa culinária tornam Recife um destino único.</p>
                        <p class="card-text"><strong>R$ 150,00</strong></p>
                        <a href="#" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagens/cards/rio-de-janeiro.jpg" class="card-img-top" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Rio de Janeiro</h5>
                        <p class="card-text">O Rio de Janeiro é famoso por suas paisagens deslumbrantes, como o Pão de Açúcar e o Cristo Redentor. Com praias icônicas como Copacabana e Ipanema, a cidade oferece uma vibrante cultura, cheia de música, dança e festas, além de uma rica gastronomia. Um destino imperdível!</p>
                        <p class="card-text"><strong>R$ 200,00</strong></p>
                        <a href="#" class="btn btn-primary">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
