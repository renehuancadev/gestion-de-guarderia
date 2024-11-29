<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nino;

class NinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nino::create([
            'nombre' => 'Juanito',
            'fecha_nacimiento' => '2000-01-01',
            'tutor_id' => 1, // ID del tutor relacionado
        ]);

        Nino::create([
            'nombre' => 'María',
            'fecha_nacimiento' => '2010-05-15',
            'tutor_id' => 2,
        ]);

        Nino::create([
            'nombre' => 'Carlos',
            'fecha_nacimiento' => '2012-09-20',
            'tutor_id' => 1,
        ]);

        Nino::create([
            'nombre' => 'Ana',
            'fecha_nacimiento' => '2008-03-30',
            'tutor_id' => 3,
        ]);
    }
}
