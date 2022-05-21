<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\LivroController;
use App\Models\Autor;
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

//Search -> Livros
Route::any('/livros/search', [LivroController::class, 'search'])->name('livros.search');




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

//Search -> Editora
Route::any('/editoras/search', [EditoraController::class, 'search'])->name('editoras.search');






//AUTOR
Route::get('/autors', [AutorController::class, 'index'])->name('autors.index');

//create
Route::get('/autors/create', [AutorController::class, 'create'])->name('autors.create');

//store
Route::post('/autors', [AutorController::class, 'store'])->name('autors.store');

//Read
Route::get('/autors/{id}', [AutorController::class, 'show'])->name('autors.show');

//Delete
Route::delete('/autors/{id}', [AutorController::class, 'destroy'])->name('autors.destroy');

//Edit
Route::get('/autors/edit/{id}', [AutorController::class, 'edit'])->name('autors.edit');

//Update
Route::put('/autors/{id}', [AutorController::class, 'update'])->name('autors.update');

//Search 
Route::any('/autors/search', [AutorController::class, 'search'])->name('autors.search');
