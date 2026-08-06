<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categorias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    <h1 class="text-lg bold ">Lista de Categorias</h1>
                    <a href="{{ route('admin.categorias.cadastrar') }}" class="bg-black text-white px-3 py-2 rounded">+ Nova
                        Categoria</a>
                </div>

                <div class=" p-6">

                    <table class="w-full text-sm text-white">

                        <thead>
                            <tr class="bg-cabecalho-tabela">
                                <th class="px-5 py-3.5 font-semibold text-left">ID</th>
                                <th class="px-5 py-3.5 font-semibold text-left">Nome</th>
                                <th class="px-5 py-3.5 font-semibold text-left hidden md:table-cell">Descrição</th>
                                <th class="px-5 py-3.5 font-semibold text-left hidden md:table-cell ">cor</th>
                                <th class="px-5 py-3.5 font-semibold">Ação</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($categoria as $c)
                                <tr class="hover:bg-slate-50 hover:text-black">
                                    <td class="px-5 py-3.5">{{ $c->id }}</td>
                                    <td class="px-5 py-3.5">{{ $c->nome }}</td>
                                    <td class="hidden md:table-cell">{{ $c->descricao }}</td>
                                    <td class="hidden md:table-cell">{{ $c->cor }}</td>
                                    <td class="px-5 py-3.5 text-center flex">

                                    <a href="{{route('admin.categorias.editar', $c->id)}}" class="bg-gray-300 px-3 py-2 rounded">Editar</a>

                                    <form action="{{ route('admin.categorias.excluir', $c->id) }}" method="POST">

                                        @method('delete')
                                        @csrf

                                        <button type="submit" class="bg-red-300 px-3 py-2 rounded ml-2" 
                                        onclick="return confirm('Deseja realmente excluir o registro?')">
                                            Excluir
                                    </button>

                                    </form>

                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center text-slate-400 px-5 py-3.5">
                                        <p>Nenhuma categoria cadastrada</p>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>
                </div>

                <div class="flex justify-center m-6">
                    Paginação
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
