@extends('blades.visitor2')

@section('title', 'MAD Producciones')

@section('css')
    {{-- <meta property="og:url"                content="{{ url('blog', $article->id)}}" />
    <meta property="og:type"               content="article" />
    <meta property="fb:app_id"             content="951140095064464" />
    <meta property="og:title"              content="{{ $article->name }}" />
    <meta property="og:description"        content="{{ $article->resume }}" />
    <meta property="og:image"              content="{{ $article->getPhoto() }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="{{ asset('css/visitor/article.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('scripts')
            
@endsection

@section('content')

<div class="topImg backgroundImage" style="background-image: url({{url('img/index/trabajos.jpg')}})">
</div>
<section id="article">
    <div class="container2">
        <div class="line_title"></div>
        <h1 class="title">TITULO DEL ARTICULO TECPATAN 2019</h1>         
        <p class="resume">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quaerat aliquam! Quo porro aspernatur consequuntur recusandae cupiditate, ipsa unde repudiandae magnam, eveniet est, omnis nemo illum quibusdam distinctio similique eaque? 
            </p>
        <p class="date"><span> Agosto 22, 2019</span></p>
        <img class="principalImg" src="{{url('img/index/trabajos.jpg')}}">
        <br>
        <div class="allTextContainer">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse exercitationem quas voluptas? Quasi sit eligendi fugit repellat tempora quaerat, iusto autem quis doloremque consectetur et vitae perferendis assumenda rerum repellendus?</p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti commodi assumenda veritatis sit aliquid culpa tempora sequi nemo laudantium eos maxime obcaecati, enim quos molestias voluptatibus amet ducimus id quisquam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi qui atque voluptates repudiandae sint totam eos quae illum ipsam! Iste molestias labore obcaecati. Esse, minus. Officia fugit ex quia dolorem?</p>
        </div>

        <div class="youtubeVideoContainer">
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CdHV7Uzw2E4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        
    </div>
    
    
</section>


<br><br><br>
@endsection