@extends('blades.app')

@section('title', 'Crear Articulo')

@section('css')
@endsection

@section('content')
<h5><a href="{{ url('app/articles') }}">Articulos</a> >> Crear </h5>

<form role="form" method="POST" enctype="multipart/form-data" onsubmit="return crearNoticia()">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input type="text" name="name" class="form-control"  placeholder="Nombre del articulo" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Resumen</label>
      <input type="text" name="resume" class="form-control"  placeholder="Escribe brevemente de que se trara la noticia" required>
    </div>

    <div class="form-group">
      <label>Imagen</label>
      <input type="file" name="img" id="imagen" accept="image/x-png,image/gif,image/jpeg" required>

      <p class="help-block">Cargue una fotografía de la noticia</p>
    </div>
    
    <div class="row"><div class="col-sm-12 col-lg-3">
        
     <div class="form-group">
      <label>Fecha</label>
      <input type="date" name="date" class="form-control" required>
    </div>
    
    <div class="input-field col l12 s12">
        <select name="article_type_id" required>            
            @foreach($types as $n)
            <option value="{{$n->id}}" >{{$n->name}}</option>
            @endforeach
        </select>
        <label>Tipo de articulo</label>
    </div>
    <br>
    
    
            
    <label>Redacta tu Articulo</label>
    <textarea name="editor1" id="editor1" rows="10" cols="80">

    </textarea>
    <input type="hidden" class="contenidoNota" name="text" required>
    
    <div class="form-group">
      <label>Iframe de Youtube</label>
      <input type="text" name="youtube" class="form-control" name="youtube">
    </div>
    
    
    <button type="submit" class="btn btn-default">Crear Nueva Nota</button>
  </form>

@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );

        function crearNoticia(){
            var data = CKEDITOR.instances.editor1.getData();
            $('.contenidoNota').val(data);

            if(data.length == 0) return false;

//            return false;
        }
    </script>
@endsection