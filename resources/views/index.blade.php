
@vite(['resources/css/estilos.css'])

{{-- Esquema --}}
    
{{-- Octavos --}}
<div class="esquema">
    <div class="jornada_contenedor">
        {{-- Primer partido --}}
        <div class="partido">
            <div class="jornada">
                @foreach ($partidos as $partido)  
                    @if ($partido->numPartido == 1)
                        <div class="jugador">                                                                      
                            <span class="equipo">{{$partido->equipo_1}}</span>
                            <span class="goles">{{$partido->goles_equipo_1}}</span>                                      
                        </div>                                                                                                                                            
                        <div class="jugador">                    
                            <span class="equipo">{{$partido->equipo_2}}</span>
                            <span class="goles">{{$partido->goles_equipo_2}}</span>                                              
                        </div>
                    @endif              
                @endforeach
            </div>                  
        </div>

        {{-- Segundo partido --}}
        <div class="partido">
            <div class="jornada">
                @foreach ($partidos as $partido)  
                    @if ($partido->numPartido == 2)
                        <div class="jugador">                                                                      
                            <span class="equipo">{{$partido->equipo_1}}</span>
                            <span class="goles">{{$partido->goles_equipo_1}}</span>                                      
                        </div>                                                                                                                                       
                        <div class="jugador">                    
                            <span class="equipo">{{$partido->equipo_2}}</span>
                            <span class="goles">{{$partido->goles_equipo_2}}</span>                                              
                        </div>
                    @endif              
                @endforeach
            </div>            
        </div>

        {{-- Tercer partido --}}
        <div class="partido">
            <div class="jornada">
                @foreach ($partidos as $partido)  
                    @if ($partido->numPartido == 3)
                        <div class="jugador">                                                                      
                            <span class="equipo">{{$partido->equipo_1}}</span>
                            <span class="goles">{{$partido->goles_equipo_1}}</span>                                      
                        </div>                                                                                                                                       
                        <div class="jugador">                    
                            <span class="equipo">{{$partido->equipo_2}}</span>
                            <span class="goles">{{$partido->goles_equipo_2}}</span>                                              
                        </div>
                    @endif              
                @endforeach
            </div>                      
        </div>

        {{-- cuarto partido --}}
        <div class="partido">
            <div class="jornada">
                @foreach ($partidos as $partido)  
                    @if ($partido->numPartido == 4)
                        <div class="jugador">                                                                      
                            <span class="equipo">{{$partido->equipo_1}}</span>
                            <span class="goles">{{$partido->goles_equipo_1}}</span>                                      
                        </div>                                                                                                                                       
                        <div class="jugador">                    
                            <span class="equipo">{{$partido->equipo_2}}</span>
                            <span class="goles">{{$partido->goles_equipo_2}}</span>                                              
                        </div>
                    @endif              
                @endforeach
            </div>                       
        </div>
    </div>

    {{-- Conectores de octavos a cuartos --}}
    <div class="conectores">
        <div class="conector">
            <div class="conector_doble"></div>
            <div class="conector_simple"></div> 
        </div>       

        <div class="conector">
            <div class="conector_doble"></div>
            <div class="conector_simple"></div> 
        </div>

        <div class="conector">
            <div class="conector_doble"></div>
            <div class="conector_simple"></div> 
        </div>

        <div class="conector">
            <div class="conector_doble"></div>
            <div class="conector_simple"></div> 
        </div>
    </div>


    {{-- Cuartos --}}
    <div class="jornada_contenedor">
        @foreach ($partidos as $partido)  
            @if ($partido->numPartido == 5)
                <div class="jornada">            
                    <div class="jugador">
                        <span class="equipo">{{$partido->equipo_1}}</span>
                        <span class="goles">{{$partido->goles_equipo_1}}</span>
                    </div>        
                </div>

                <div class="jornada">            
                    <div class="jugador">
                        <span class="equipo">{{$partido->equipo_2}}</span>
                        <span class="goles">{{$partido->goles_equipo_2}}</span>
                    </div>                
                </div>
            @endif
        @endforeach
        
        @foreach ($partidos as $partido)  
            @if ($partido->numPartido == 6)
                <div class="jornada">
                    <div class="jugador">
                        <span class="equipo">{{$partido->equipo_1}}</span>
                        <span class="goles">{{$partido->goles_equipo_1}}</span>
                    </div>
                </div>
                        
                <div class="jornada">
                    <div class="jugador">
                        <span class="equipo">{{$partido->equipo_2}}</span>
                        <span class="goles">{{$partido->goles_equipo_2}}</span>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

    {{-- Conectores de cuartos a semifinal --}}
    <div class="conectores">
        <div class="conector">
            <div class="conector_doble conector_doble_semifinal"></div>
            <div class="conector_simple"></div> 
        </div>       

        <div class="conector">
            <div class="conector_doble conector_doble_semifinal"></div>
            <div class="conector_simple"></div> 
        </div>
    </div>



    {{-- Semifinal --}}    
    <div class="jornada_contenedor">
        <div class="jornada">            
                <div class="conector_doble"></div>
                <div class="conector_simple"></div>            
            <div class="jugador">
                @foreach ($partidos as $partido)  
                    @if ($partido->numPartido == 7)
                        <span class="equipo">{{$partido->equipo_1}}</span>
                        <span class="goles">{{$partido->goles_equipo_1}}</span>
                    @endif
                @endforeach
            </div>        
        </div>

        <div class="jornada">            
                <div class="conector_doble"></div>
                <div class="conector_simple"></div>
            <div class="jugador">
                @foreach ($partidos as $partido)  
                    @if ($partido->numPartido == 7)
                        <span class="equipo">{{$partido->equipo_2}}</span>
                        <span class="goles">{{$partido->goles_equipo_2}}</span>
                    @endif
                @endforeach
            </div>        
        </div>
    </div>

    {{-- Conectores de semifinal a ganador --}}
    <div class="conectores">
        <div class="conector">
            <div class="conector_doble conector_doble_ganador"></div>
            <div class="conector_simple"></div> 
        </div>            
    </div>
        
    {{-- Ganador --}}
    <div class="ganador_esquema">
        <div class="ganador">            
                <div class="conector_doble"></div>
                <div class="conector_simple"></div>            
            <div class="jugador">
                @foreach ($ganador as $ganador)  
                    @if ($ganador->torneo == "Copa America")
                        <span class="equipo">{{$ganador->equipo_ganador}}</span>
                        <span class="goles"></span>    
                    @endif                                                      
                @endforeach
            </div>        
        </div>   
    <div>

</div>




