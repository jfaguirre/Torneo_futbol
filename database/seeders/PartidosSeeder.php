<?php

namespace Database\Seeders;

use App\Models\Partido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 1,
            'jornada' => 'octavos',
            'equipo_1' => 'El Salvador',
            'equipo_2' => 'Nicaragua',
            'goles_equipo_1' => 3,
            'goles_equipo_2' => 1,
            'ganador' => 'El Salvador'            

        ]);

        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 2,
            'jornada' => 'octavos',
            'equipo_1' => 'Honduras',
            'equipo_2' => 'Guatemala',
            'goles_equipo_1' => 1,
            'goles_equipo_2' => 0,
            'ganador' => 'Honduras'            

        ]);

        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 3,
            'jornada' => 'octavos',
            'equipo_1' => 'Estados Unidos',
            'equipo_2' => 'Peru',
            'goles_equipo_1' => 3,
            'goles_equipo_2' => 1,
            'ganador' => 'Estados Unidos'            

        ]);

        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 4,
            'jornada' => 'octavos',
            'equipo_1' => 'Argentina',
            'equipo_2' => 'Ecuador',
            'goles_equipo_1' => 3,
            'goles_equipo_2' => 2,
            'ganador' => 'Argentina'            

        ]);


        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 5,
            'jornada' => 'cuartos',
            'equipo_1' => 'El Salvador',
            'equipo_2' => 'Honduras',
            'goles_equipo_1' => 1,
            'goles_equipo_2' => 0,
            'ganador' => 'El Salvador'            

        ]);

        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 6,
            'jornada' => 'cuartos',
            'equipo_1' => 'Estados Unidos',
            'equipo_2' => 'Argentina',
            'goles_equipo_1' => 1,
            'goles_equipo_2' => 3,
            'ganador' => 'Argentina'            

        ]);


        Partido::create([
                
            'torneo' => 'Copa America',
            'numPartido' => 7,
            'jornada' => 'semifinal',
            'equipo_1' => 'El Salvador',
            'equipo_2' => 'Argentina',
            'goles_equipo_1' => 4,
            'goles_equipo_2' => 1,
            'ganador' => 'Argentina'            

        ]);

    }
}
