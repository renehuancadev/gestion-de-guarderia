<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\TipoActividad;
use App\Models\Nino;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();

        return view('actividades.index', ['actividades' => $actividades]);
    }

    public function create()
    {
        $tipos_actividad = TipoActividad::all();
        $ninos = Nino::all();

        return view('actividades.create', compact('tipos_actividad', 'ninos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nino_id' => 'required|exists:ninos,id',
            'tipo_actividad_id' => 'required|exists:tiposactividad,id',
            'fecha' => 'required|date',
            'descripcion' => 'nullable|string|max:255',
        ]);

        Actividad::create($validated);

        return redirect()->route('actividades.index')->with('success', 'Actividad creada exitosamente.');
    }

    public function edit(Actividad $actividad)
    {
        $tipos_actividad = TipoActividad::all();
        $ninos = Nino::all();

        return view('actividades.edit', compact('actividad', 'tipos_actividad', 'ninos'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $validated = $request->validate([
            'nino_id' => 'required|exists:ninos,id',
            'tipo_actividad_id' => 'required|exists:tiposactividad,id',
            'fecha' => 'required|date',
            'descripcion' => 'nullable|string|max:255',
        ]);

        $actividad->update($validated);

        return redirect()->route('actividades.index')->with('success', 'Actividad actualizada exitosamente.');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();

        return redirect()->route('actividades.index')->with('success', 'Actividad eliminada exitosamente.');
    }
}
