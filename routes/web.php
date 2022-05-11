<?php

use App\Http\Controllers\LivroController;
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

//Index
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

//create
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');

//store
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');

//read
Route::get('/livros/{id}', [LivroController::class, 'show'])->name('livros.show');