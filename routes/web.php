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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/games', [\App\Http\Controllers\GameController::class, 'index'])->name('game.index');
Route::get('/games/create', [\App\Http\Controllers\GameController::class, 'create'])->name('game.create');
Route::get('/games/{game}', [\App\Http\Controllers\GameController::class, 'show'])->name('game.show');
//Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
//Route::get('/profile', [\App\Http\Controllers\GameController::class, 'index'])->name('profile.index');
//Route::get('/game', [\App\Http\Controllers\GameController::class, 'index'])->name('game.index');
//Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');
//Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'index'])->name('registration.index');
