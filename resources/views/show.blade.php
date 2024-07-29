<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @if ($categoria_view)
        <h1> El nombre del videojuego es: {{$nameVideogame_view}} y la categoria es: {{$categoria_view}} </h1>
    @else
        <h1> El nombre del videojuego es: {{$nameVideogame_view}}</h1>
    @endif
    
    <h2>{{$fecha_view}}</h2>
</body>
</html>