<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar Clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Editar Cliente</h1>
            <form action="/cliente/{{$cliente->id}}" method="POST">
                @method('PUT')
                @csrf 
                <input type="text" name="nombre" value="{{$cliente->nombre}}">
                <input type="text" name="direccion" value="{{$cliente->direccion}}">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>
