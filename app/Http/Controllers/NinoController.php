<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nino;
use App\Models\Tutor;

class NinoController extends Controller
{
    public function index()
    {
        $ninos = Nino::all();

        return view('ninos.index', ['ninos' => $ninos]);
    }

    public function create()
    {
        $tutores = Tutor::all();

        return view('ninos.create', compact('tutores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'tutor_id' => 'required|exists:tutores,id',
        ]);

        Nino::create($validated);

        return redirect()->route('ninos.index')->with('success', 'Niño creado exitosamente.');
    }

    public function edit(Nino $nino)
    {
        $tutores = Tutor::all();

        return view('ninos.edit', compact('nino', 'tutores'));
    }

    public function update(Request $request, Nino $nino)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'tutor_id' => 'required|exists:tutores,id',
        ]);

        $nino->update($validated);

        return redirect()->route('ninos.index')->with('success', 'Niño actualizado exitosamente.');
    }

    public function destroy(Nino $nino)
    {
        $nino->delete();

        return redirect()->route('ninos.index')->with('success', 'Niño eliminado exitosamente.');
    }
}
