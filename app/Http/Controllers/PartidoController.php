<?php

namespace App\Http\Controllers;

use App\Models\Cuarto;
use App\Models\Ganador;
use App\Models\Octavo;
use App\Models\Partido;
use App\Models\Semifinal;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    
    public function partidos()
    {
            
      $ganador = Ganador::all();
      $partidos = Partido::all();
    
      return view('index', compact('partidos', 'ganador'));
    }



}
