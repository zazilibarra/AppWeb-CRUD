<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <h1>Crea Pasteles</h1>
            <form action="/guardaPastel" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control" type="text" name="sabor" placeholder="Sabor">
                <br>
                <input class="form-control" type="number" name="precio" placeholder="Precio">
                <br>
                <input type="file" class="form-control" name="imagen">
                <br>
                <input class="btn btn-primary" type="submit">
            </form>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Sabor</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasteles as $p)
                    <tr>
                        <td>{{$p->sabor}}</td>
                        <td>{{$p->precio}}</td>
                        <td><img src="{{asset('storage/'.$p->rutaimg)}}" style="width:50px;" alt=""></td>
                        <td><a href="/editar/{{$p->id}}">Editar</a> <a href="/borrar/{{$p->id}}">Borrar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
