<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLivro;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    //index
    public function index(){
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    //create
    public function create(){
        return view('livros.create');
    }

    public function store(StoreUpdateLivro $request){
        Livro::create($request->all());

        return redirect()->route('livros.index');
    }

    //read
    public function show($id){
        $livro = Livro::find($id);
        if(!$livro){
            return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não encontrado');
                
        }
        return view('livros.show', compact('livro'));
       
    }
}
