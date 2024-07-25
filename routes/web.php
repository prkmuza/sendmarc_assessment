<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/start_game', [App\Http\Controllers\GameController::class, 'startGame']);


Route::get('/api/add_point/{ForPlayerID}/{TotalPlayer1Points}/{TotalPlayer2Points}', [App\Http\Controllers\GameController::class, 'addPoint']);