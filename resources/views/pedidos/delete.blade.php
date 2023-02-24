<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
    <title>delete</title>
</head>
<body>
    <h3>ELIMINAR PEDIDO</h3><br><br><br>

    <form name="" method="post" action="{{route('pedidos.destroy',$pedido)}}">
        @csrf
        @method('delete')

        ID: <input type="text" name="id" readonly="true" value="{{$pedido->id}}"/> <br><br><br>
        Cliente: <input type="text" name="cliente" readonly="true" value="{{$pedido->cliente}}"/> <br><br><br>
        
        <p>¿Está seguro de eliminar?</p><br><br><br>

        <button class="btn btn-success" type="submit">Si, eliminar</button>
        <button class="btn btn-danger" type="button" onclick="location.href='{{url('/pedidos')}}'">Cancelar</button>
    </form>
</body>
</html>