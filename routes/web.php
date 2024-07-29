<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GameController::class, 'index'])->name('games');
Route::get('/games/create', [GameController::class, 'create'])->name('gamesCreate');
Route::get('/games/{name_game}/{categoria?}', [GameController::class, 'help']);
Route::post('/games/storeVideojuego', [GameController::class, 'storeVideojuego'])->name('createVideojuego');
Route::get('/view/{game_id}', [GameController::class, 'view'])->name('viewGame');
Route::post('/games/updateVideojuego', [GameController::class, 'updateVideojuego'])->name('updateVideojuego');
Route::get('/delete/{game_id}', [GameController::class, 'delete'])->name('deleteGame');

