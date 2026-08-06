<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Categoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">
                    <h1 class="text-lg bold ">Editar Categoria</h1>
                    <a href="{{route('admin.categorias.index')}}" class="bg-slate-400 text-white px-3 py-2 rounded">< Voltar para Categoria</a>
                </div>

                <div class="p-6">

                    <form action="{{route('admin.categorias.atualizar', $categoria->id)}}" method="POST" enctype="multipart/form-data">
                        {{-- Evitar erro 419 --}}
                        @csrf
                        @method('put')

                        @include('admin.categorias._form') 
                    </form>
                
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
