<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actividad;
use Illuminate\Support\Facades\DB;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tiposactividad')->insert([
            ['nombre' => 'Deporte'],
            ['nombre' => 'Arte'],
            ['nombre' => 'Lectura'],
            ['nombre' => 'Música'],
        ]);


        Actividad::create([
            'nino_id' => 1,
            'tipo_actividad_id' => 1, // "Deporte"
            'fecha' => '2024-01-01',
            'descripcion' => 'Clase de fútbol en el parque',
        ]);

        Actividad::create([
            'nino_id' => 2,
            'tipo_actividad_id' => 2, // "Arte"
            'fecha' => '2024-01-02',
            'descripcion' => 'Taller de pintura con acuarelas',
        ]);

        Actividad::create([
            'nino_id' => 1,
            'tipo_actividad_id' => 3, // "Lectura"
            'fecha' => '2024-01-03',
            'descripcion' => 'Lectura de cuentos infantiles',
        ]);

        Actividad::create([
            'nino_id' => 2,
            'tipo_actividad_id' => 4, // "Música"
            'fecha' => '2024-01-04',
            'descripcion' => 'Clase introductoria de guitarra',
        ]);
    }
}
