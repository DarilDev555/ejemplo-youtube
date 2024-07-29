<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>formulario de cracion VIDEO JUEGOS</h1>
    <p><a href="{{ route('games') }}">Listar Todos Los Juegos</a></p>
    <form action="{{route('createVideojuego')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nombre del VideoJuego" name="name_game">
        @error('name_game')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <select name="categoria" id="">
            @foreach ($categories_view as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>