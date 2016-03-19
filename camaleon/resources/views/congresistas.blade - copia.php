@extends('layout.base')

@section('contenido')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>

    <div class='bloque_principal' >
        
      <div class="contenido1">

        <h2 class="h2-hijo color1" >¿Quién es el candidato más camaleón?  </h2>
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
        <a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a>
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

      
      <div class="contenido1">

        <h2 class="h2-hijo color1" >¿Cuáles han sido los candidatos más fieles?  </h2>
        
        <div id="candidatos_1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <script type="text/javascript">
          $(function () {
            // Create the chart
            $('#candidatos_1').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Browser market shares. January, 2015 to May, 2015'
                },
                subtitle: {
                    text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Total percent market share'
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
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Microsoft Internet Explorer',
                        y: 56.33,
                        drilldown: 'Microsoft Internet Explorer'
                    }, {
                        name: 'Chrome',
                        y: 24.03,
                        drilldown: 'Chrome'
                    }, {
                        name: 'Firefox',
                        y: 10.38,
                        drilldown: 'Firefox'
                    }, {
                        name: 'Safari',
                        y: 4.77,
                        drilldown: 'Safari'
                    }, {
                        name: 'Opera',
                        y: 0.91,
                        drilldown: 'Opera'
                    }, {
                        name: 'Proprietary or Undetectable',
                        y: 0.2,
                        drilldown: null
                    }]
                }],
                drilldown: {
                    series: [{
                        name: 'Microsoft Internet Explorer',
                        id: 'Microsoft Internet Explorer',
                        data: [
                            [
                                'v11.0',
                                24.13
                            ],
                            [
                                'v8.0',
                                17.2
                            ],
                            [
                                'v9.0',
                                8.11
                            ],
                            [
                                'v10.0',
                                5.33
                            ],
                            [
                                'v6.0',
                                1.06
                            ],
                            [
                                'v7.0',
                                0.5
                            ]
                        ]
                    }, {
                        name: 'Chrome',
                        id: 'Chrome',
                        data: [
                            [
                                'v40.0',
                                5
                            ],
                            [
                                'v41.0',
                                4.32
                            ],
                            [
                                'v42.0',
                                3.68
                            ],
                            [
                                'v39.0',
                                2.96
                            ],
                            [
                                'v36.0',
                                2.53
                            ],
                            [
                                'v43.0',
                                1.45
                            ],
                            [
                                'v31.0',
                                1.24
                            ],
                            [
                                'v35.0',
                                0.85
                            ],
                            [
                                'v38.0',
                                0.6
                            ],
                            [
                                'v32.0',
                                0.55
                            ],
                            [
                                'v37.0',
                                0.38
                            ],
                            [
                                'v33.0',
                                0.19
                            ],
                            [
                                'v34.0',
                                0.14
                            ],
                            [
                                'v30.0',
                                0.14
                            ]
                        ]
                    }, {
                        name: 'Firefox',
                        id: 'Firefox',
                        data: [
                            [
                                'v35',
                                2.76
                            ],
                            [
                                'v36',
                                2.32
                            ],
                            [
                                'v37',
                                2.31
                            ],
                            [
                                'v34',
                                1.27
                            ],
                            [
                                'v38',
                                1.02
                            ],
                            [
                                'v31',
                                0.33
                            ],
                            [
                                'v33',
                                0.22
                            ],
                            [
                                'v32',
                                0.15
                            ]
                        ]
                    }, {
                        name: 'Safari',
                        id: 'Safari',
                        data: [
                            [
                                'v8.0',
                                2.56
                            ],
                            [
                                'v7.1',
                                0.77
                            ],
                            [
                                'v5.1',
                                0.42
                            ],
                            [
                                'v5.0',
                                0.3
                            ],
                            [
                                'v6.1',
                                0.29
                            ],
                            [
                                'v7.0',
                                0.26
                            ],
                            [
                                'v6.2',
                                0.17
                            ]
                        ]
                    }, {
                        name: 'Opera',
                        id: 'Opera',
                        data: [
                            [
                                'v12.x',
                                0.34
                            ],
                            [
                                'v28',
                                0.24
                            ],
                            [
                                'v27',
                                0.17
                            ],
                            [
                                'v29',
                                0.16
                            ]
                        ]
                    }]
                }
            });
        });
      </script>
        

      </div>   

      
      <div class="contenido1">

        <h2 class="h2-hijo color1" >¿Cuáles han sido los candidatos más traicioneros?  </h2>
        
        

      </div>   

    
        
      <div class="contenido1 ">

        <h2 class="h2-hijo color1" >¿Quién es el candidato más camaleón?  </h2>
        
        

      </div>   

    
        
      <div class="contenido1">

        <h2 class="h2-hijo color1" >¿Quiénes son los camaleones más veteranos?  </h2>
        
        

      </div>   
      <div class="contenido1">

        <h2 class="h2-hijo color2" >¿Cuál es el partido con más camaleones?  </h2>
        
        

      </div> 

      <div class="contenido1">

        <h2 class="h2-hijo color2" >¿Cuáles son los partidos más usados?  </h2>
        
        

      </div> 

      <div class="contenido1">

        <h2 class="h2-hijo color3" >¿En qué elecciones hubo más camaleones?  </h2>
        
        

      </div> 

    </div>

    
      
    

   
    
@endsection