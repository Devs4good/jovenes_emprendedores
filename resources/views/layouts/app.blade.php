<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Emprendedores Jovenes</title>
    
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>
<Style>
body {
    background-color:#EEE;
}
.primary 
{
    background-color:#dc3545 !important;
    color:white !important;
}
.primaryback
{
  
    background:#dc3545 !important;
}
.primaryback:hover{
    background:#dc3545 !important;
}
.maxred:hover
{
    background-color:#dc3545 !important;
}
.nav-link:hover
{
    color:#505151 !important;
}
</Style>
<body>
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="239690273379471"
  theme_color="#dc3545"
  logged_in_greeting="Hola!, ¿Necesitás Ayuda?"
  logged_out_greeting="Hola!, ¿Necesitás Ayuda?">
</div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:white;box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="/logo.png" style="width:100%;max-width:200px;margin-top:-18px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="/nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/eventos">Eventos</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/calendario">Calendario</a>
                                </li>
                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><b>Ingresar</b></a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="btn btn-primary primary" href="{{ route('register') }}">Registro</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="maxred dropdown-item" href="/u/{{ Auth::user()->apodo }}">Mi Perfil</a>
                                    </li>
                                        <li>
                                                <a class="dropdown-item maxred" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 Salir
                                             </a>
         
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                             </form>
                                        </li>
                                      
                                    </ul>
                            
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')
   
    </div>
      <div class="modal fade" id="event9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Curso de Liderazgo Relacional (4 encuentros)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body col-lg-12 col-lx-12">
                        <img class="col" style="padding-bottom: 30px;" src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F46586486%2F162079084926%2F1%2Foriginal.jpg?w=800&auto=compress&rect=0%2C39%2C1666%2C833&s=cabe44dee47bf0a6b9eda827f3b4404c" alt="">
                          <p>El curso consiste de 4 encuentros de 3hs cada uno. En cada encuentro se trabajará cada una de las siguientes temáticas:</p>
                            <ul>
                                <li>Inteligencia Emocional: 10 de Julio (10hs-13hs)</li>
                                <li>Asertividad:	12 de Julio (10hs-13hs)</li>
                                <li>Coaching:	18 de Julio (10hs-13hs)</li>
                                <li>Gestión del Cambio:	19 de Julio (10hs-13hs)</li>
                            </ul> 
                             
                         
                          <p><b>Lugar y hora:</b> MIAMI AD SCHOOL BUENOS AIRES, 1570 Crámer - CABA, Martes 3 de julio de 18:30 a 19:30hs.</p>
                          <a class="btn btn-primary col" href="https://www.eventbrite.com.ar/e/curso-de-liderazgo-relacional-4-encuentros-tickets-47470704154?aff=es2" target="_blank" role="button">Más información y entradas (Gratis)</a>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div> 
                
                <script src="/js/app.js"></script> 
                <script src="/js/material.min.js"></script>
                <script src="/js/bs.min.js"></script>

                <script src="/js/material-kit.js"></script>
</body>
</html>
