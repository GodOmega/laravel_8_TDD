<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
               <form method="POST" action="{{ route('repositories.store') }}">
                    @csrf
                    <div>
                        <label>URL *</label>
                        <input type="text" name="url" value="" >
                    </div>
                    <div>
                        <label>Description *</label>
                        <textarea name="description"></textarea>
                    </div>
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
