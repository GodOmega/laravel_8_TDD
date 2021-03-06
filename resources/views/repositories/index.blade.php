<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
               <table>
                   <thead>
                       <tr>ID</tr>
                       <tr>url</tr>
                       <tr>ver</tr>
                   </thead>
                   <tbody>
                       @forelse ($repositories as $repository)
                           <tr>
                            <td>{{ $repository->id }}</td>
                            <td>{{ $repository->url }}</td>
                            <td>
                                <a href="{{route('repositories.show', $repository)}}">ver</a>
                            </td>
                           </tr>
                       @empty
                       <tr>
                            <td colspan="3">No hay respositorios creados</td>
                       </tr>
                       @endforelse
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</x-app-layout>
