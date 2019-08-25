@extends('blades.visitor2')

@section('content')
<br><br><br>
<br><br><br>
<br><br><br>

<div class="container2">
        <div class="line_title"></div>
        <h1 class="title">INICIAR SESIÓN</h1>       
<form class="form-horizontal" method="POST" action="{{ url('login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Correo</label>

        <div class="col-md-12">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Contraseña</label>

        <div class="col-md-12">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

   

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Acceder
            </button>

            <a class="btn btn-link" href="{{ url('recuperar') }}">
                ¿Olvidaste tu contraseña?
            </a>
        </div>
    </div>
</form>
</div>
@endsection