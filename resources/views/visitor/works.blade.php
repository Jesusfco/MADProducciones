@extends('blades.visitor2')

@section('title', 'MAD Producciones')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="{{ asset('css/visitor/works.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('scripts')
            
@endsection

@section('content')


<section id="works">
    <div class="container2">
        <div class="line_title"></div>
        <h1 class="title">PORTAFOLIO DE <br>TRABAJOS</h1>         
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quaerat aliquam! Quo porro aspernatur consequuntur recusandae cupiditate, ipsa unde repudiandae magnam, eveniet est, omnis nemo illum quibusdam distinctio similique eaque? 
            </p>
            <br><br>                        
    </div>

    <div class="works_container flex">

        <div class="work">            
            <a href="{{ url('trabajos/1')}}" class="work_card">
                <div class="img_container">
                    <img src="{{url('img/index/trabajos.jpg')}}">
                </div> 
                <div class="description">
                    <h3>NOMBRE DE TRABAJO</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas aut doloremque qui sed distinctio reiciendis quibusdam molestiae facere harum </p>
                    <p><span> Agosto 22, 2019</span></p>                                    
                </div>
            </a>
        </div>
        <div class="work">            
            <a href="{{ url('trabajos/1')}}" class="work_card">
                <div class="img_container">
                    <img src="{{url('img/index/trabajos.jpg')}}">
                </div> 
                <div class="description">
                    <h3>NOMBRE DE TRABAJO</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas aut doloremque qui sed distinctio reiciendis quibusdam molestiae facere harum </p>
                    <p><span> Agosto 22, 2019</span></p>                                    
                </div>
            </a>
        </div>
        <div class="work">            
            <a href="{{ url('trabajos/1')}}" class="work_card">
                <div class="img_container">
                    <img src="{{url('img/index/trabajos.jpg')}}">
                </div> 
                <div class="description">
                    <h3>NOMBRE DE TRABAJO </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas aut doloremque qui sed distinctio reiciendis quibusdam molestiae facere harum </p>
                    <p><span> Agosto 22, 2019</span></p>                                    
                </div>
            </a>
        </div>
        
    </div>

    <br><br>

    <div class="pagination">
        <a class="active" href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>

</section>


<br><br><br>
@endsection