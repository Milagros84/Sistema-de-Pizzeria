<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
    <h3>TAMAÑOS</h3><br>

    <a  class="btn btn-outline-primary" href="{{url('/tamaños/registrar')}}">Registrar</a> 
    <a  class="btn btn-outline-primary"  href="{{url('/index')}}">Volver</a><br><br> 



    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">ACCION</th>
        </tr>
    </thead>

        <!-- filas -->
        @forelse($tamaño as $listar)            
            <tr @if($loop->odd)
            @endif>
                <td>{{$listar->id}}</td>
                <td>{{$listar->descripcion}}</td>
                <td>{{$listar->costo}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('tamaños.edit',$listar->id)}}">Editar</a> | 
                    <a class="btn btn-secondary"href="{{route('tamaños.delete',$listar->id)}}">Eliminar</a>
                </td>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Lista vacía.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>