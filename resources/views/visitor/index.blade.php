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
    {{-- <script src="js/mail.js"></script> --}}
@endsection

@section('content')

<div class="fullScreenContainer overflowHidden topDivIndex centrarFlex">

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
        <p>Creemos <br>
            It’s easy. Just click “Edit Text” or double click me to add your own <br>content and make changes to the font. </p>
            <br>
    </div>
    <div class="flex">

        <div class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </div>
        <div class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </div>
        <div class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </div>
        <div class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </div>
        <div class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </div>
        <div class="backgroundImage centrarFlex" style="background-image: url(img/index/trabajos.jpg);">
            <div class="expandFatherContainerSize centrarFlex paddingDiv">
                <div class="">
                    
                    <h3 class="text_center">NOMBRE DE TRABAJO</h3>
                    <p class="text_center">Una breve descripción</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients">
        <div class="container2">
            <div class="line_title"></div>
            <h1 class="title">NUESTROS <br>CLIENTES</h1>            
            <p>I'm a paragraph. Click here to add your own text and edit me.<br>
                It’s easy. Just click “Edit Text” or double click me to add your own <br>content and make changes to the font. </p>

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

<section id="contact">
        <div class="container2">
            <div class="line_title"></div>
            <h1 class="title">CONTACTO</h1>            
            
            <div class="flex">
                <div>

                    <form class="mailForm">
                        <input placeholder="Nombre" type="text" name="name" required>
                        <input placeholder="Correo" type="email" name="email" required>
                        <input placeholder="Telefono" type="phone" name="phone" required>
                        <textarea rows="5" required placeholder="Escribe tu mensaje"></textarea>
                        <button class="btn">Enviar</button>
                    </form>

                </div>

                <div>
                    <h5>Estamos encantado de atenderte</h5>
                    <p>
                        <a href="">correo@madproducciones.com</a><br>
                        <a href="">961-123-4567</a>
                    </p>
                </div>

            </div>
    
</section>

@endsection