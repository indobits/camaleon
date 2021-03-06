<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>APAPSO PERU - Asociación de Psoriasis y Artritis Psoriásica</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}">

    
    <link rel="shortcut icon" href='assets/img/favicon.ico' />

    
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" >

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.min.css') }}" >

    <script src="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}" ></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" ></script>
    <script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
      
    
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
              <a class="navbar-brand" href="{{ URL::route('menu') }}"><span >APAPSO </span>PERU - Administrador</a>
            </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" >
            <li><a href="{{ URL::route('menu') }}" class="solo">INICIO</a></li>
            <li><a href="{{ URL::route('carrete.index') }}" class="solo">CARRETE</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOVEDADES </a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::route('noticia.index') }}" >Noticias</a></li>
                <li><a href="{{ URL::route('campana.index') }}">Campañas</a></li>
                <li><a href="{{ URL::route('galeria.index') }}">Galería de imágenes</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PUBLICACIONES </a>
              <ul class="dropdown-menu">
                <li><a href="" >Boletín</a></li>
                <li><a href="{{ URL::route('nutricional.index') }}">Nutrición</a></li>
                <li><a href="{{ URL::route('psicologica.index') }}">Psicología</a></li>
                <li><a href="{{ URL::route('entrevista.index') }}">Entrevistas</a></li>
              </ul>
            </li>
            <li><a href="{{ URL::route('mensajes') }}" class="solo">CONTACTO</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="solo">Hola, {!!Auth::user()->name!!}</a></li>
            <li><a href="{{ URL::route('logout') }}" class="solo">LogOut</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        <div>
    
     
     
    

    </div>

    </header>

    

   @yield('script')  
          @yield('contenido')

    
   

</body>
</html>
