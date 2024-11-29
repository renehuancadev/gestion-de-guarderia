<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tutor;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tutor::create([
            'nombre' => 'Elena',
            'telefono' => '7737372'
        ]);
        Tutor::create([
            'nombre' => 'Victor',
            'telefono' => '7737372'
        ]);
        Tutor::create([
            'nombre' => 'Marcelo',
            'telefono' => '7737372'
        ]);
        Tutor::create([
            'nombre' => 'Luis',
            'telefono' => '7737372'
        ]);
        Tutor::create([
            'nombre' => 'Yandi',
            'telefono' => '7737372'
        ]);
    }
}
