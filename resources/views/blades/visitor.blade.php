<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/png" href="{{ asset('img/icon.gif') }}" rel="shortcut icon">
    <title>@yield('title') || JesusRoguez</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900&display=swap" rel="stylesheet">

    <link href="{{ asset('css/normalize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/visitor/theme.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    {{-- <link href="{{ asset('css/visitor/alert.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/> --}}
    <link href="{{ url('assets/fontawesome/css/all.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="backgroundColor">

    <nav class="menu-principal">
        <div class="nav-container">
            <div class="logo-container-nav">
                <a href="{{ url('/')}}">
                    <img src="{{ url('img/logo2.png')}}">
                </a>
            </div>
            <div class="nav-links only_pc">
                <a>SERVICIOS</a>
                <a>NOSOTROS</a>
                <a>CLIENTES</a>                
                <a href="{{ url('/trabajos')}}">TRABAJOS</a>                
                <a href="{{ url('/')}}#contacto">CONTACTO</a>
                
            </div>
            <div class=" nav-links menuIcon ">
                <a><i class="fas fa-bars"></i></a>
            </div>
        </div>

        <div class="movBar centrarFlex hide" id="">
            <span class="hideBarIcon"><i class="fas fa-bars"></i></span>
            <div>
                <a>SERVICIOS</a>
                <a>NOSOTROS</a>
                <a>CLIENTES</a>                
                <a href="{{ url('/trabajos')}}">TRABAJOS</a>                
                <a href="{{ url('/')}}#contacto">CONTACTO</a>
            </div>
        </div>
    </nav>
    @yield('content')
    

    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    @yield('scripts')
</body>
</html>

