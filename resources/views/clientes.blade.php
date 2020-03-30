<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Cliente</h1>
            <a href="/cliente/create">Crea Cliente</a>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <td>Accion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $c)
                    <tr>
                        <td>{{$c->nombre}}</td>
                        <td>{{$c->direccion}}</td>
                        <td>
                            <a href="/cliente/{{$c->id}}/edit">Editar</a>
                            <form action="/cliente/{{$c->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
