<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEditora;
use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    //Index
    public function index(){
        $editoras = Editora::all();
        return view('editoras.index', compact('editoras'));
    }

    //create
    public function create(){
        return view('editoras.create');
    }

    public function store(StoreUpdateEditora $request){
        Editora::create($request->all());
        return redirect()->route('editoras.index');
    }

    //Read
    public function show($id){
        $editora= Editora::find($id);
        if(!$editora){
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Erro: Editora nao encontrada');
        }
        return view('editoras.show', compact('editora'));
    }
}