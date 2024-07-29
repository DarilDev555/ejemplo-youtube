<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Vista creada en blade y llamada desde el controlador
    </h1>
    <p><a href="{{ route('gamesCreate') }}">Nuevo Juego</a></p>
    <h2>
        Lista de juegos
    </h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Creado</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tBody>

            @forelse ($games_view as $juego)
                <tr>
                    <th>{{ $juego->id }}</th>
                    <th > <a href="{{ route  ("viewGame", $juego->id)}}">{{ $juego->name }}</a> </th>
                    <th>{{ $juego->category_id }}</th>
                    <th>{{ $juego->created_at }}</th>
                    <!-- <th>{{ $juego->active }}</th> -->
                    <th>
                        @if ($juego->active)
                            <span style="color: green">Activo</span>
                        @else
                            <span style="color: red">Inactivo</span>
                        @endif
                    </th>
                    <th>
                        <a href="{{ route('deleteGame', $juego->id) }}">Eliminar</a>
                    </th>
                </tr>
            @empty
                <tr>
                    <th>No hay juegos</th>
                </tr>
            @endforelse
        </tBody>
    </table>

</body>

</html>