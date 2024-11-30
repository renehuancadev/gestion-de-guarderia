<?php

namespace App\Http\Controllers;

use App\Models\TipoActividad;
use Illuminate\Http\Request;

class TipoActividadController extends Controller
{
    public function index()
    {
        $tipos_actividad = TipoActividad::all();

        return view('tiposactividad.index', ['tipos_actividad' => $tipos_actividad]);
    }
}
