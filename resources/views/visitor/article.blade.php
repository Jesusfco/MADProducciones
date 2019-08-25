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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/gallery/css/blueimp-gallery.css') }}">

@endsection

@section('scripts')
            

    <script src="{{ asset('assets/gallery/js/blueimp-helper.js') }}"></script>
    <script src="{{ asset('assets/gallery/js/blueimp-gallery.js') }}"></script>
    <script src="{{ asset('assets/gallery/js/blueimp-gallery-fullscreen.js') }}"></script>
    <script src="{{ asset('assets/gallery/js/blueimp-gallery-indicator.js') }}"></script>
    <script src="{{ asset('assets/gallery/js/jquery.blueimp-gallery.js') }}"></script>
    <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };

        var idGallery = {{ $article->id}};
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
    <script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/visitor/articulo.js') }}"></script>
@endsection

@section('content')

<div class="topImg backgroundImage" style="background-image: url({{ $article->getPhoto()}})">
</div>
<section id="article">
    <div class="container2">
        <div class="line_title"></div>
        <h1 class="title">{{ $article->name }}</h1>         
        <p class="resume">{{ $article->resume }} 
            </p>
        <p class="date"><span> {{ Carbon::parse($article->date)->format('M d, Y') }}</span></p>
        <img class="principalImg" src="{{ $article->getPhoto() }}">
        <br>
        <div class="allTextContainer">
                {!! $article->text !!}
        </div>

        @if($article->youtube != NULL)
        <div class="youtubeVideoContainer">
            <div>
                {!! $article->youtube !!}
            </div>
        </div>

        @endif

        {{--  --}}
        {{--  --}}
        {{-- GALERIA DE FOTOS --}}


        <div v-if="photos.length > 0" id="gallery_">
            <br><br>
            <div class="line_title"></div>
            <h3 class="font_5">GALERIA</h3>
            <div  class="photoContainer" id="links">
                <a v-for="photo in photos" class="photo" v-bind:href="photo.path" data-gallery="#blueimp-gallery-links">
                    <div v-bind:id="'pho-' + photo.id" class="backgroundPhoto"></div>
                </a>        
            </div>
        </div>

        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        
    </div>
    
    
</section>


<br><br><br>
@endsection