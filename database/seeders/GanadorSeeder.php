<?php

namespace Database\Seeders;

use App\Models\Ganador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GanadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ganador::create([
        'torneo' => 'Copa America',
        'equipo_ganador' => 'Argentina'
        ]);
    }
}
