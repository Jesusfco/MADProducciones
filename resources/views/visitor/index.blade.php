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
                <h1>MAKING <br>CONNECTIONS</h1>
                <div></div>
                <h1>DELIVERING <br>RESULTS</h1>
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
                <p>SOCIAL<br>MEDIA</p>
            </div>
            <div>
                <div class="mini_line"></div>
                <p>SOCIAL<br>MEDIA</p>
            </div>
            <div>
                <div class="mini_line"></div>
                <p>SOCIAL<br>MEDIA</p>
            </div>
            <div>
                <div class="mini_line"></div>
                <p>SOCIAL<br>MEDIA</p>
            </div>
        </div>    
    </div>

</section>

<section id="quienes" class="backgroundImage" style="background-image: url(img/index/quienesBackground1.jpg);">

        <div class="container2">
            <div class="line_title"></div>
            <h1 class="title">QUIENES <br>SOMOS</h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam, recusandae eveniet quidem, aliquam, repellat quas numquam a accusantium temporibus quod ullam aperiam eligendi officia molestias sit earum aliquid eaque!</p>    
        </div>
</section>

<section id="works">
    <div class="container2">
        <div class="line_title"></div>
        <h1 class="title">NUESTROS <br>TRABAJOS</h1>
        <br>    
        <p>I'm a paragraph. Click here to add your own text and edit me.<br>
            It’s easy. Just click “Edit Text” or double click me to add your own <br>content and make changes to the font. </p>
    </div>
</section>

@endsection