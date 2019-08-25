<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAD Producciones | Nuevo Contacto</title>
</head>
<body>

    <h1>Nuevo Contacto || {{ $data->name }}</h1>    
    <img src="{{ url('img/logo1.png') }}" width="180px">
    <p>CORREO: {{ $data->email }}</p>
    <p>TELÉFONO: {{ $data->phone }}</p>
    <p>MENSAJE:<br> <br> {{ $data->message }}</p>
</body>
</html>