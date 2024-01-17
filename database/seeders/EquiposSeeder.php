<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipo::create([
            'equipo' => 'El Salvador',
        ]);

        Equipo::create([
            'equipo' => 'Nicaragua',
        ]);

        Equipo::create([
            'equipo' => 'Honduras',
        ]);

        Equipo::create([
            'equipo' => 'Guatemala',
        ]);

        Equipo::create([
            'equipo' => 'Estados Unidos',
        ]);

        Equipo::create([
            'equipo' => 'Peru',
        ]);

        Equipo::create([
            'equipo' => 'Argentina',
        ]);

        Equipo::create([
            'equipo' => 'Ecuador',
        ]);
    }
}
