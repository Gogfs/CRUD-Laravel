<x-layouts.app :title="__('Tarefas')">

<div class="max-w-3xl mx-auto py-8">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Lista de Tarefas</h1>

        <a href="{{ route('tasks.create') }}"
            class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
            Nova Tarefa
        </a>
    </div>

    <ul class="space-y-4"> 
    <!--Listando as tarefas -->
        @foreach ($tasks as $task)
            <li class="p-4 bg-white shadow rounded-md flex justify-between items-center">
                <div>
                    <strong class="text-lg text-gray-900">{{ $task->titulo }}</strong>
                    <p class="text-sm text-gray-600">{{ $task->descricao ?? 'Sem descrição' }}</p>
                </div>

                <div class="flex gap-3 items-center">

                    <a href="{{ route('tasks.edit', $task->id) }}"
                        class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
                        Editar
                    </a>

                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition"
                            onclick="return confirm('Deseja excluir esta tarefa?')">
                            Excluir
                        </button>
                    </form>

                </div>
            </li>
        @endforeach
    </ul>

</div>

</x-layouts.app>
