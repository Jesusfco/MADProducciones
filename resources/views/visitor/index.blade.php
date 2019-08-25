@extends('blades.visitor')

@section('title', 'MAD Producciones')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="{{ asset('css/visitor/index.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('scripts')
    <script src="{{ url('assets/js/jquery.waypoints.min.js')}}"></script>    
    <script src="{{ url('assets/js/jquery.stellar.js')}}"></script>    
    <script src="js/visitor/index.js"></script>
    {{-- <script src="js/visitor/menu.js"></script> --}}
    {{-- <script src="js/mail.js"></script> --}}
@endsection

@section('content')

<div class="fullScreenContainer overflowHidden topDivIndex centrarFlex" id="top">

        <div class="text-container-principal">
                <h1>CREANDO  <br>ESCENARIOS</h1>
                <div></div>
                <h1>ENTREGANDO<br>EXPERIENCIAS</h1>
            </div>
    <div class="absolute expandFatherContainerSize" style="background: #004f8491; z-index: 2"></div>
    <div class="absolute expandFatherContainerSize backgroundImage" id="topImg" style="background-image: url(img/index/top.jpg); z-index: 1;"></div>

</div>

<section id="services">

    <div class="container2">
        <div class="line_title"></div>
        <h1 class="title">NUESTROS <br>SERVICIOS</h1>    
        <div class="flex">
            <div>
                <div class="mini_line"></div>
                <p>VIDEO EN PANTALLAS<br>GIGANTES</p>
            </div>
            <div>
                <div class="mini_line"></div>
                <p>ESTRUCTURA<br>PERIMETRAL</p>
            </div>
            <div>
                <div class="mini_line"></div>
                <p>ILUMINACIÓN PROFESIONAL<br>ARQUITECTONICA</p>
            </div>
            <div>
                <div class="mini_line"></div>
                <p>RENTA DE PLANTAS <br>DE LUZ</p>
            </div>

            <div>
                <div class="mini_line"></div>
                <p>AUDIO PROFESIONAL INCLUYENDO MICROFÓNIA</p>
            </div>

            <div>
                <div class="mini_line"></div>
                <p>GRAND SUPPORT</p>
            </div>
        </div>    
    </div>

</section>

<section id="quienes" class="backgroundImage" style="background-image: url(img/index/quienesBackground1.jpg);">

        <div class="container2">
            <div class="line_title"></div>
            <h1 class="title">QUIENES <br>SOMOS</h1>            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam, recusandae eveniet quidem, aliquam, repellat quas numquam a accusantium temporibus quod ullam aperiam eligendi officia molestias sit earum aliquid eaque!</p>    
        </div>
</section>

<section id="works">
    <div class="container2">
        <div class="line_title"></div>
        <h1 class="title">NUESTROS <br>TRABAJOS</h1>         
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quaerat aliquam! Quo porro aspernatur consequuntur recusandae cupiditate, ipsa unde repudiandae magnam, eveniet est, omnis nemo illum quibusdam distinctio similique eaque? 
            </p>
            <br><br>
        <a href="trabajos" class="btn">VER TODOS</a>
        <br><br>
        <br><br>
    </div>
    <div class="flex">

        <a href="" class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </a>
        <a href="" class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </a>
        <a href="" class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </a>
        <a class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </a>
        <a class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </a>
        <a class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </a>
    </div>
</section>

<section id="clients">
        <div class="container2">
            <div class="line_title"></div>
            <h1 class="title">NUESTROS <br>CLIENTES</h1>            
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit atque quam amet provident fugit dolor tempore voluptatum voluptatibus dignissimos. Ex aut doloribus quos autem libero labore corrupti mollitia pariatur suscipit.</p>

            <div class="flex ">
                <div><img src="img/clientes/1.webp"></div>
                <div><img src="img/clientes/2.webp"></div>
                <div><img src="img/clientes/3.webp"></div>
                <div><img src="img/clientes/4.webp"></div>
                <div><img src="img/clientes/5.webp"></div>
                <div><img src="img/clientes/6.webp"></div>
                <div><img src="img/clientes/7.webp"></div>
                <div><img src="img/clientes/8.webp"></div>
            </div>
        </div>
    
</section>


@endsection