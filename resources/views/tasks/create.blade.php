<x-layouts.app :title="__('Criar Tarefa')">

<div class="max-w-xl mx-auto py-8">

    <h1 class="text-3xl font-bold text-gray-800 mb-6">Criar Tarefa</h1>

    <!-- formulário de criação -->
    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-5 bg-white p-6 shadow rounded-lg">
        @csrf

        <div>
            <label class="block mb-1 font-medium text-gray-700">Título:</label>
            <input type="text" name="titulo"
                class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-700">Descrição:</label>
            <textarea name="descricao"
                class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300"></textarea>
        </div>

        <button type="submit"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Salvar
        </button>
    </form>

</div>

</x-layouts.app>
