<x-layout title="Editar Actividad">
    <form action="{{ route('actividades.update', $actividad->id) }}" method="POST" class="max-w-sm mx-auto">
        @csrf
        @method('PUT')

        <!-- Nombre de la Actividad -->
        <div class="mb-5">
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción de la Actividad</label>
            <textarea id="descripcion" name="descripcion" 
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                             dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                             dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                      placeholder="Describe brevemente la actividad" required>{{ old('descripcion', $actividad->descripcion) }}</textarea>
        </div>

        <!-- Fecha -->
        <div class="mb-5">
            <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de la Actividad</label>
            <input type="date" id="fecha" name="fecha" value="{{ old('fecha', $actividad->fecha) }}"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                          focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                          dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                          dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                   required />
        </div>

        <!-- Niño relacionado -->
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
                    <option value="{{ $nino->id }}" {{ old('nino_id', $actividad->nino_id) == $nino->id ? 'selected' : '' }}>
                        {{ $nino->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Tipo de Actividad -->
        <div class="mb-5">
            <label for="tipo_actividad_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Actividad</label>
            <select id="tipo_actividad_id" name="tipo_actividad_id" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    required>
                <option value="">Seleccione un tipo</option>
                @foreach($tipos_actividad as $tipo)
                    <option value="{{ $tipo->id }}" {{ old('tipo_actividad_id', $actividad->tipo_actividad_id) == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                       focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
                       dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar Cambios</button>
    </form>
</x-layout>
