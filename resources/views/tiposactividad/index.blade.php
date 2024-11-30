<x-layout title="Listar Tipos de Actividad">

    @if ($tipos_actividad->isEmpty())
        <p>No hay tipos de actividad registrados.</p>
    @else
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tipos_actividad as $tipo)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $tipo->id }}</td>
                            <td class="px-6 py-4">{{ $tipo->nombre }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-layout>
