<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                        <!-- Container -->
                        <div class="container mt-5">
                            <h2 class="text-center mb-4 text-gray-900 "> {{ __('Gerenciar Cidades') }}</h2>

                            <!-- Barra de Pesquisa -->
                            <div class="row mb-4">
                                <div class="col-md-6 mx-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="searchCity"
                                            placeholder="Pesquisar cidade..." aria-label="Pesquisar cidade"
                                            aria-describedby="searchButton">
                                        <button class="btn btn-primary" type="button" id="searchButton">Buscar</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabela de Cidades -->
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped" id="citiesTable">
                                        <thead>
                                            <tr class="text-center align-middle">
                                                <th>ID</th>
                                                <th>Foto</th>
                                                <th>Cidade</th>
                                                <th>Descrição</th>
                                                <th>Preço</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center align-middle">
                                                <td>1</td>
                                                <td><img src="imagens/cards/foz-de-iguacu.jpg" style="width: 80px;height: 50px;object-fit: cover;"
                                                        alt="Foz de Iguaçu"></td>
                                                <td>Foz de Iguaçu</td>
                                                <td>Cataratas do Iguaçu, Itaipu e mais...</td>
                                                <td>R$ 100,00</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-pencil-alt"></i> Editar
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Deletar
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="text-center align-middle">
                                                <td>2</td>
                                                <td><img src="imagens/cards/recife.jpg" style="width: 80px;height: 50px;object-fit: cover;" alt="Recife">
                                                </td>
                                                <td>Recife</td>
                                                <td>Veneza Brasileira, Praia de Boa Viagem...</td>
                                                <td>R$ 150,00</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-pencil-alt"></i> Editar
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Deletar
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="text-center align-middle">
                                                <td>3</td>
                                                <td><img src="imagens/cards/rio-de-janeiro.jpg" style="width: 80px;height: 50px;object-fit: cover;"
                                                        alt="Rio de Janeiro"></td>
                                                <td>Rio de Janeiro</td>
                                                <td>Cristo Redentor, Pão de Açúcar...</td>
                                                <td>R$ 200,00</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-pencil-alt"></i> Editar
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Deletar
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Bootstrap JS and Dependencies -->
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                        <script
                            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
                        <script>
                            // Função de Busca
                            document.getElementById('searchButton').addEventListener('click', function () {
                                const searchValue = document.getElementById('searchCity').value.toLowerCase();
                                const rows = document.querySelectorAll('#citiesTable tbody tr');

                                rows.forEach(row => {
                                    const cityName = row.cells[2].textContent.toLowerCase();
                                    if (cityName.includes(searchValue)) {
                                        row.style.display = '';
                                    } else {
                                        row.style.display = 'none';
                                    }
                                });
                            });
                        </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>