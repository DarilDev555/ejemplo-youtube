<?php

namespace App\Http\Controllers;

use App\Models\VideoJuego;
use Illuminate\Http\Request;
use App\Models\Category;

class GameController extends Controller
{
    public function index()
    {
        $videogames = VideoJuego::orderBy('id', 'desc')->get();
        return view("index", ["games_view" => $videogames]);
    }

    public function create()
    {
        $categories = Category::all();
        return view("create", ["categories_view" => $categories]);
    }

    public function help($name_game, $categoria = null)
    {
        $date = now();
        return view("show", [
            'nameVideogame_view' => $name_game,
            'categoria_view' => $categoria,
            'fecha_view' => $date
        ]);
    }

    public function storeVideojuego(Request $request)
    {
        $request->validate([
            'name_game' => 'required|string|max:255|min:3',
            'categoria' => 'required|integer|exists:categories,id',
        ]);

        $videojuego = new VideoJuego();
        $videojuego->name = $request->name_game;
        $videojuego->category_id = $request->categoria;
        $videojuego->active = 1;
        $videojuego->save();
        return redirect()->route('games');
    }

    public function view($game_id)
    {
        $videojuego = VideoJuego::find($game_id);
        $categorias = Category::all();
        return view("update", [
            'videojuego_view' => $videojuego,
            'categories_view' => $categorias,  // Cambiado de 'categorias_view' a 'categories_view'
        ]);
    }

    public function updateVideojuego(Request $request)
    {
        $request->validate([
            'name_game' => 'required|string|max:255|min:3',
            'categoria' => 'required|integer|exists:categories,id',
            'game_id' => 'required|integer|exists:video_juegos,id',
        ]);


        $videojuego = VideoJuego::find($request->game_id);
        $videojuego->name = $request->name_game;
        $videojuego->category_id = $request->categoria;
        $videojuego->active = 1;
        $videojuego->save();
        return redirect()->route('games');
    }

    public function delete($game_id)
    {
        $videojuego = VideoJuego::find($game_id);
        $videojuego->delete();
        return redirect()->route('games');
    }
}
