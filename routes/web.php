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

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');


Route::get('/admin/genres', [\App\Http\Controllers\GenreController::class, 'index'])->name('admin.genre.index');
Route::get('/admin/genres/create', [\App\Http\Controllers\GenreController::class, 'create'])->name('admin.genre.create');
Route::post('/admin/genres', [\App\Http\Controllers\GenreController::class, 'store'])->name('admin.genre.store');
Route::get('/admin/genres/{genre}', [\App\Http\Controllers\GenreController::class, 'show'])->name('admin.genre.show');
Route::get('/admin/genres/{genre}/edit', [\App\Http\Controllers\GenreController::class, 'edit'])->name('admin.genre.edit');
Route::patch('/admin/genres/{genre}', [\App\Http\Controllers\GenreController::class, 'update'])->name('admin.genre.update');
Route::delete('/admin/genres/{genre}', [\App\Http\Controllers\GenreController::class, 'destroy'])->name('admin.genre.delete');

Route::get('/admin/developers', [\App\Http\Controllers\DeveloperController::class, 'index'])->name('admin.developer.index');
Route::get('/admin/developers/create', [\App\Http\Controllers\DeveloperController::class, 'create'])->name('admin.developer.create');
Route::post('/admin/developers', [\App\Http\Controllers\DeveloperController::class, 'store'])->name('admin.developer.store');
Route::get('/admin/developers/{developer}', [\App\Http\Controllers\DeveloperController::class, 'show'])->name('admin.developer.show');
Route::get('/admin/developers/{developer}/edit', [\App\Http\Controllers\DeveloperController::class, 'edit'])->name('admin.developer.edit');
Route::patch('/admin/developers/{developer}', [\App\Http\Controllers\DeveloperController::class, 'update'])->name('admin.developer.update');
Route::delete('/admin/developers/{developer}', [\App\Http\Controllers\DeveloperController::class, 'destroy'])->name('admin.developer.delete');

Route::get('/admin/platforms', [\App\Http\Controllers\PlatformsController::class, 'index'])->name('admin.platform.index');
Route::get('/admin/platforms/create', [\App\Http\Controllers\PlatformsController::class, 'create'])->name('admin.platform.create');
Route::post('/admin/platforms', [\App\Http\Controllers\PlatformsController::class, 'store'])->name('admin.platform.store');
Route::get('/admin/platforms/{platform}', [\platformsApp\Http\Controllers\PlatformsController::class, 'show'])->name('admin.platform.show');
Route::get('/admin/platforms/{platform}/edit', [\App\Http\Controllers\PlatformsController::class, 'edit'])->name('admin.platform.edit');
Route::patch('/admin/platforms/{platform}', [\App\Http\Controllers\PlatformsController::class, 'update'])->name('admin.platform.update');
Route::delete('/admin/platforms/{platform}', [\App\Http\Controllers\PlatformsController::class, 'destroy'])->name('admin.platform.delete');



Route::get('/games', [\App\Http\Controllers\GameController::class, 'index'])->name('game.index');
Route::get('/games/create', [\App\Http\Controllers\GameController::class, 'create'])->name('game.create');
Route::post('/games', [\App\Http\Controllers\GameController::class, 'store'])->name('game.store');
Route::get('/games/{game}', [\App\Http\Controllers\GameController::class, 'show'])->name('game.show');
Route::get('/games/{game}/edit', [\App\Http\Controllers\GameController::class, 'edit'])->name('game.edit');
Route::patch('/games/{game}', [\App\Http\Controllers\GameController::class, 'update'])->name('game.update');
Route::delete('/games/{game}', [\App\Http\Controllers\GameController::class, 'destroy'])->name('game.delete');

Route::get('/genres', [\App\Http\Controllers\GenrePageController::class, 'index'])->name('genre.index');
Route::get('/genres/{genre}', [\App\Http\Controllers\GenrePageController::class, 'show'])->name('genre.show');

Route::get('/developers', [\App\Http\Controllers\DeveloperPageController::class, 'index'])->name('developer.index');
Route::get('/developers/{developer}', [\App\Http\Controllers\DeveloperPageController::class, 'show'])->name('developer.show');


//Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
//Route::get('/profile', [\App\Http\Controllers\GameController::class, 'index'])->name('profile.index');
//Route::get('/game', [\App\Http\Controllers\GameController::class, 'index'])->name('game.index');
//Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');
//Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'index'])->name('registration.index');
