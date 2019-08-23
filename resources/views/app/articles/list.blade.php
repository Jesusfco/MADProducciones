@extends('blades.app')

@section('title', 'Articulos')

@section('css')
@endsection

@section('content')

<h5>Articulos >> Lista</h5>
<a href="{{ url('app/articles/create') }}"><button class="btn">Crear Articulo</button></a>
<a href="{{ url('app/articles/types') }}"><button class="btn">Tipos de articulos</button></a>

<form method="GET" class="navbar-form">
        <div class="input-field">
            <i class="material-icons prefix">search</i>
            <input name="term" type="search" value="{{ request('term')}}" class="form-control" autofocus>
            <label>Buscar Articulo</label>
        </div>
   </form> 

   <table class="striped responsive-table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($objects as $n)
        
        <tr id="id{{$n->id}}">
            <td>{{ $n->id }}</td>
            <td>{{ $n->name }}</td>
            <td>{{ $n->date }}</td>
            <td>
                <a href="{{ url('app/articles/edit/'.$n->id.'/uploadPhotos') }}" class="btn purple">Administrar Fotos </a>                                
                <a href="{{ url('app/articles/edit/'.$n->id.'') }}" class="btn yellow">Editar </a>
                <a  onclick="eliminar({{ $n->id }}, '{{ $n->name }}')" class="btn red"> Eliminar</a>
                <a href="{{ url('articulos', $n->id) }}" class="btn green">Ver</a>
            </td>
        </tr>
        
        @endforeach
    </tbody>
    </table>
@endsection

@section('scripts')

@endsection