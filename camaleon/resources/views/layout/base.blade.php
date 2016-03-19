<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Camaleón</title>
    

    <script src="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}" ></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" ></script>
    <script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}">

    
    <link rel="shortcut icon" href='assets/img/favicon.ico' />

    
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" >

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.min.css') }}" >  
    
 @yield('script')
      
    
</head>
<body>
   
   
    <header>
        
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ URL::route('home') }}"><span >Camaleón <img src="assets/img/camaleon.png" alt=""></a>
            </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" >
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidatos </a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::route('home') }}" >¿Quién es el candidato más camaleón?</a></li>
                <li><a href="{{ URL::route('home') }}">¿Cuáles han sido los candidatos más fieles?</a></li>
                <li><a href="{{ URL::route('home') }}">¿Cuáles han sido los candidatos más traicioneros?</a></li>
                <li><a href="{{ URL::route('home') }}">¿Quiénes son los camaleones más veteranos?</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organizaciones Políticas </a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::route('home') }}">¿Cuál es el partido con más camaleones?</a></li>
                <li><a href="{{ URL::route('home') }}">¿Cuáles son los partidos más usados?</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Elecciones </a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::route('home') }}">¿En qué elecciones hubo más camaleones?</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sigue la pista del camaleón </a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::route('home') }}">¿Cómo votaron los camaleones elegidos en el Congreso?</a></li>
                <li><a href="{{ URL::route('home') }}">¿Qué proyectos de ley presentaron los congresistas camaleones?</a></li>
              </ul>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="solo" target="_blank">
                <span class="fa fa-facebook-official fa-1x" id="facebook"></span></a>
            </li>
            <li><a href="" class="solo" target="_blank">
                <span class="fa fa-twitter fa-1x" id="facebook"></span></a>
            </li>
            
          </ul>
          
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        

    </header>

     
          @yield('contenido')

   

    
   

</body>
</html>
