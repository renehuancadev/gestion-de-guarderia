<x-layout title="Registrar Actividad">
    <form action="{{ route('actividades.store') }}" method="POST" class="max-w-sm mx-auto">
        @csrf

        <div class="mb-5">
            <label for="nino_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Niño</label>
            <select id="nino_id" name="nino_id" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    required>
                <option value="">Seleccione un niño</option>
                @foreach($ninos as $nino)
                    <option value="{{ $nino->id }}" {{ old('nino_id') == $nino->id ? 'selected' : '' }}>
                        {{ $nino->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="tipo_actividad_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Actividad</label>
            <select id="tipo_actividad_id" name="tipo_actividad_id" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    required>
                <option value="">Seleccione un tipo de actividad</option>
                @foreach($tipos_actividad as $tipo)
                    <option value="{{ $tipo->id }}" {{ old('tipo_actividad_id') == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                          focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                          dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                          dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                   required />
        </div>

        <div class="mb-5">
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="3" 
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                             dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                             dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('descripcion') }}
            </textarea>
        </div>

        <button type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                       focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
                       dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Actividad</button>
    </form>
</x-layout>
