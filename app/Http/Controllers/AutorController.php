<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAutor;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    //Index
    public function index()
    {
        $autors = Autor::all();
        return view('autors.index', compact('autors'));
    }

    //create
    public function create()
    {
        return view('autors.create');
    }

    public function store(StoreUpdateAutor $request)
    {
        Autor::create($request->all());
        return redirect()->route('autors.index');
    }

    //Read
    public function show($id)
    {
        $autors = Autor::find($id);
        if (!$autors) {
            return redirect()
                ->route('autors.index')
                ->with('message', 'Erro! Autor nao encontrado!');
        }
        return view('autors.show', compact('autors'));
    }

    //Delete
    public function destroy($id)
    {
        $autors = Autor::find($id);
        if (!$autors) {
            return redirect()
                ->route('autors.index')
                ->with('message', 'Erro! Autor nao encontrado!');
        }
        $autors->delete();
        return redirect()
            ->route('autors.index')
            ->with('message', 'Autor deletado com sucesso!');
    }
}
