<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar Pastel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <h1>Edita Pastel</h1>
            <form action="/guardarEdicion" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$pastel->id}}">
                <input class="form-control" type="text" name="sabor" placeholder="Sabor" value="{{$pastel->sabor}}">
                <br>
                <input class="form-control" type="number" name="precio" placeholder="Precio" value="{{$pastel->precio}}">
                <br>
                <input class="btn btn-primary" type="submit">
            </form>
        </div>
    </body>
</html>
