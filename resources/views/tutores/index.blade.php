<x-layout title="Listar Tutores">

    @if ($tutores->isEmpty())
        <p>No hay tutores registrados.</p>
    @else
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tutores as $tutor)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $tutor->id }}</th>
                            <td class="px-6 py-4">{{ $tutor->nombre }}</td>
                            <td class="px-6 py-4">{{ $tutor->telefono }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-layout>

