<?php

use App\Http\Controllers\EditoraController;
use App\Http\Controllers\LivroController;
use App\Models\Editora;
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


//LIVRO

//Index
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

//create
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');

//store
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');

//read
Route::get('/livros/{id}', [LivroController::class, 'show'])->name('livros.show');

//delete
Route::delete('/livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');

//edit
Route::get('/livros/edit/{id}', [LivroController::class, 'edit'])->name('livros.edit');

//update
Route::put('/livros/{id}', [LivroController::class, 'update'])->name('livros.update');


//EDITORA
Route::get('editoras/', [EditoraController::class, 'index'])->name('editoras.index');

//create
Route::get('editoras/create', [EditoraController::class, 'create'])->name('editoras.create');

//Store Editoras
Route::post('/editoras', [EditoraController::class, 'store'])->name('editoras.store');

//Read
Route::get('/editoras/{id}', [EditoraController::class, 'show'])->name('editoras.show');

//Delete
Route::delete('/editoras/{id}', [EditoraController::class, 'destroy'])->name('editoras.destroy');

//Edit
Route::get('/editoras/edit/{id}', [EditoraController::class, 'edit'])->name('editoras.edit');

//Update
Route::put('/editoras/{id}', [EditoraController::class, 'update'])->name('editora.update');