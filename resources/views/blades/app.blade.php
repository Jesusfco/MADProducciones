<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') || Administración || MAD-PRODUCCIONES</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/materialize/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/admin/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('assets/sweet/sweetalert.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>

        <nav class="black lighten-1" role="navigation">
                <div class="nav-wrapper container">
                  <a id="logo-container" href="{{ url('')}}" class="brand-logo">
                    <img src="{{ url('img/logo2.png')}}" height="63px;">
                  </a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('app') }}">Inicio</a></li>
                    <li><a href="{{ url('app/users') }}">Usuarios</a></li>
                    <li><a href="{{ url('app/articles') }}">Trabajos</a></li>
                    <li><a href="{{ url('app/perfil') }}">Mi Perfil</a></li>
                    <li><a href="{{ url('logout') }}">Cerrar Sesión</a></li>
                  </ul>
            
                  <ul id="nav-mobile" class="sidenav">
                    <li><a href="{{ url('app') }}">Inicio</a></li>
                    <li><a href="{{ url('app/users') }}">Usuarios</a></li>
                    <li><a href="{{ url('app/articles') }}">Articulos</a></li>
                    <li><a href="{{ url('app/perfil') }}">Mi Perfil</a></li>
                    <li><a href="{{ url('logout') }}">Cerrar Sesión</a></li>
                  </ul>
                  <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
              </nav>

              <div class="container">
                @yield('content')
              </div>

              <br>

    <footer class="page-footer orange">
            <div class="container">
              <div class="row">
                {{-- <div class="col l6 s12"> --}}
                  {{-- <h5 class="white-text">Manten esto presente </h5>
                  <p class="grey-text text-lighten-4">Recuerda cada día cual es tu sueño, el honor y la humildad son raices de tu caracter. El guerrero es el espirito que alberga en tu alma</p> --}}
        
        
                {{-- </div> --}}
                {{-- <div class="col l3 s12">
                  <h5 class="white-text">Settings</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Connect</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              Creado por <a class="orange-text text-lighten-3" href="https://www.instagram.com/roguez_a7/">Jesus Roguez</a>
              </div>
            </div>
          </footer>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('assets/materialize/materialize.js') }}"></script>
    <script src="{{ asset('js/admin/init.js') }}"></script>
    <script src="{{ asset('assets/sweet/sweetalert.min.js')}}"></script>
    <script src="{{ asset('js/admin/delete.js')}}"></script>
    <script>
            $(document).ready(function(){
               $('select').formSelect();
               $('.fixed-action-btn').floatingActionButton();
               $('.tooltipped').tooltip();
           })
           
           @if(session('msj'))    
               M.toast({html: '{{session('msj')}}'})        
           @endif
    </script>
    @yield('scripts')
    

</body>
</html>
