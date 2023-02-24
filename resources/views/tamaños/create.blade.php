<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
    <title>create</title>
</head>
<body>
    <h3>REGISTRAR TAMAÑO</h3>

    <form name="" method="post" action="{{route('tamaños.store')}}">
        @csrf
        <br class="form-group">
          <label for="exampleFormControlInput1">Nombre del Tamaño:</label>
          <input type="text" name="descripcion" class="form-control" id="exampleFormControlInput1" placeholder="Nombre"><br><br><br>
          
          <br class="form-group">
          <label for="exampleFormControlInput1">Precio:</label>
          <input type="number" name="costo" class="form-control" id="exampleFormControlInput1" placeholder="Precio"><br><br><br>
          
          <button class="btn btn-secondary" type="submit">Guardar</button>
          <button class="btn btn-dark" type="button" onclick="location.href='{{url('/tamaños')}}'">Cancelar</button>
      </form>
</body>
</html>