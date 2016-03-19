@extends('layout.base')

@section('contenido')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<div class="col-md-12">
  <button type="submit" class="btn btn-default pull-right boton">Ayúdanos a cazar a los camaleones</button>
</div>

    <div class='bloque_principal' >
      
      <div class="contenido1">
        <p class="bajada">Descubre a los candidatos que cambiaron de partido político para obtener tu voto y llegar al poder</p>
      </div>


      <div class="contenido1">

        <h2 class="h2-hijo color1" >El Ranking de los camaleones reelectos que postulan al Congreso</h2>
        
        <div id="ranking" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <script type="text/javascript">
          $(function () {
            // Create the chart
            $('#ranking').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: ''
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> <br/>'
                },

                series: [{
                    name: 'Candidatos',
                    colorByPoint: true,
                    data: [
                    @foreach($camaleonReelectos as $camaleonReelecto)
                        
                         {  name: "{{$camaleonReelecto->nombre_completo}}",
                           y: {{$camaleonReelecto->cant}},},

                    @endforeach
]
                }]
                
            });
        });
      </script>

      </div>  

      <div class="contenido1">

        <h2 class="h2-hijo color2" >¿Quién es el candidato más camaleón?  </h2>
        *Considerando solo las renuncias.
        
        <p class="cont-img">
                  <img src="assets/img/cuaresma.jpg" class="img_circular">
        </p>
        <p class="text-center">CARLOS RICARDO CUARESMA SANCHEZ</p>

        <div class="grupo-annos">
            <div class="anno pull-left">2005</div>
            <div class="anno">2010</div>
            <div class="anno pull-right">2015</div>
        </div>
        <hr>
        
        <div class="cong-partidos">
          <div class="partido">
            <h1>Frente Independiente Moralizador</h1>
            <p>(2005 - 2008)</p>
            <p>CONGRESISTA - PRIMER VICEPRESIDENTE DE LA REPUBLICA</p>
          </div>

          <div class="partido">
            <h1>Peru Posible</h1>
            <p>(2010 - 2012)</p>
            <p>CONGRESISTA - PRIMER VICEPRESIDENTE DE LA REPUBLICA</p>
          </div>
          <div class="partido">
            <h1>Somos Peru</h1>
            <p>(2013 - 2013)</p>
            <p>CONGRESISTA - PRIMER VICEPRESIDENTE DE LA REPUBLICA</p>
          </div>
          <div class="partido">
            <h1>Alianza para el Progreso</h1>
            <p>(2014 - 2015)</p>
            <p>CONGRESISTA - PRIMER VICEPRESIDENTE DE LA REPUBLICA</p>
          </div>
        </div>
        
      </div>   

<!--
     <div class="contenido1">

        <h2 class="h2-hijo color3" >¿Cuál es el partido con más camaleones?  </h2>
        
        <div class="cand-veteranos">
          
        
         
         
        </div>

      </div> 

      <div class="contenido1 ">

        <h2 class="h2-hijo color1" >¿Cuántos camaleones van a la reelección?</h2>
        
        

      </div>   

     <div class="contenido1">

        <h2 class="h2-hijo color2" >¿Cuáles son los partidos más usados?  </h2>
        
        

      </div> 
        
      
      <div class="contenido1">

        <h2 class="h2-hijo color1" >¿Cuáles han sido los candidatos más fieles?  </h2>
        
        <div id="candidatos_1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        
        

      </div>   
-->
      
      <div class="contenido1">

        <h2 class="h2-hijo color1" >¿Cuáles han sido los candidatos más camaleones?  </h2>
            <div id="traicioneros" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <script type="text/javascript">
          $(function () {
            // Create the chart
            $('#traicioneros').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: ''
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> <br/>'
                },

                series: [{
                    name: 'Candidatos',
                    colorByPoint: true,
                    data: [
                    @foreach($traicioneros as $traicionero)
                        
                         {  name: "{{$traicionero->nombre_completo}}",
                           y: {{$traicionero->cant}},},

                           
                        
                   
                    @endforeach
]
                }]
                
            });
        });
      </script>
        

      </div>   

    <!--
      <div class="contenido1">

        <h2 class="h2-hijo color3" >¿En qué elecciones hubo más camaleones?  </h2>
        
        

      </div> 
      -->
      <div class="contenido1">
        <h2 class="h2-hijo color1" >¿Cuáles son los camaleones más veteranos?  </h2>
        
        <div class="cand-veteranos">
          
     @foreach($candidatos as $candidato)
                <div class="veterano">

                    <p class="cont-img">
                              <img src="assets/img/{{$candidato->imagen}}" class="img_circular">
                    </p>
                    <h1>{{$candidato->nombre_completo}}</h1>
                    <p>{{$candidato->orgpolitica}}</p>
                   
                  </div>
                   
            @endforeach
         
        </div>

      </div>   
      

      

      

    </div>

    
      
    

   
    
@endsection