<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Creación de Videojuegos</h1>
    <p><a href="{{ route('games') }}">Listar Todos Los Juegos</a></p>
    <form action="{{route('updateVideojuego')}}" method="POST">
        @csrf

        <input type="hidden" name="game_id" value="{{ $videojuego_view->id }}">
        <input type="text" placeholder="Nombre del VideoJuego" name="name_game" value="{{ $videojuego_view->name }}">
        @error('name_game')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <select name="categoria" id="">
            @foreach ($categories_view as $categoria)
                <option value="{{ $categoria->id }}" @if($categoria->id == $videojuego_view->category_id) selected @endif >{{ $categoria->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
