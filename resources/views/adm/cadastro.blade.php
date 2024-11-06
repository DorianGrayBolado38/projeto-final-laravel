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


    

    <div style="width: 800px;padding: 20px;background-color: white;border-radius: 8px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 class="text-center">Cadastro das Cidades</h2>
       
        <form>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" required>
            </div>
            
            <!-- Descrição para o Card -->
            <div class="mb-3">
                <label for="descricaoCard" class="form-label">Descrição para o Card</label>
                <textarea class="form-control" id="descricaoCard" rows="2" maxlength="100" required></textarea>
                <small class="form-text text-muted">Máximo de 100 caracteres</small>
            </div>
            
            <!-- Descrição Completa -->
            <div class="mb-3">
                <label for="descricaoCompleta" class="form-label">Descrição Completa</label>
                <textarea class="form-control" id="descricaoCompleta" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="valor" required>
            </div>
            
            <!-- Foto para o Card -->
            <div class="mb-3">
                <label for="fotoCard" class="form-label">Foto para o Card</label>
                <input type="file" class="form-control" id="fotoCard" accept="image/*" required>
            </div>
            
            <!-- Foto para a Descrição -->
            <div class="mb-3">
                <label for="fotoDescricao" class="form-label">Foto para a Descrição</label>
                <input type="file" class="form-control" id="fotoDescricao" accept="image/*" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</div>
            </div>
        </div>
    </div>
</x-app-layout>