<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
    
    <title>index</title>
</head>
<body>
    <h3>PIZZAS</h3><br>

    <a  class="btn btn-outline-primary" href="{{url('/pizzas/create')}}">Registrar</a> 
    <a  class="btn btn-outline-primary" href="{{url('/index')}}">Volver</a> <br><br>



    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Precio</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>

        <!-- filas -->
        @forelse($pizzeria as $listar)            
            <tr @if($loop->odd)
            @endif>
                <td>{{$listar->id}}</td>
                <td>{{$listar->nombre}}</td>
                <td>{{$listar->tamaños->descripcion}}</td>
                <td>{{$listar->tamaños->costo}}</td>
                
                <td><h1>Subir Imagen</h1>
                    <img src="data:${lista.getTypeImage()};base64,${lista.getBase64Image()}" 
                    width="100px" height="100px" border="1"/></td>
                



                <td>
                 <a class="btn btn-success" href="{{route('pizzas.edit',$listar->id)}}">Editar</a>
                <a class="btn btn-secondary"href="{{route('pizzas.delete',$listar->id)}}">Eliminar</a>
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