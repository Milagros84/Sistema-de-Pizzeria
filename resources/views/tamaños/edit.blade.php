<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
    <title>edit</title>
</head>
<body>
    <h3>EDITAR TAMAÑO</h3><br>

    <form name="" method="post" action="{{route('tamaños.update',$tamaño)}}">
        @csrf
        @method('put')

        ID: <input type="text" name="id" readonly="true" value="{{$tamaño->id}}"/> <br><br><br>
        Nombre: <input type="text" name="descripcion" value="{{$tamaño->descripcion}}"/> <br><br><br>
        Precio: <input type="number" name="costo" step="any" value="{{$tamaño->costo}}"/> <br><br><br>

        <button class="btn btn-info"  type="submit">Guardar</button>
        <button class="btn btn-info" type="button" onclick="location.href='{{url('/tamaños')}}'">Cancelar</button>
    </form>
</body>
</html>