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
        $autors = Autor::orderBy('nome')->paginate(5);
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

    //Edit
    public function edit($id)
    {
        $autors = Autor::find($id);
        if (!$autors) {
            return redirect()
                ->route('autors.index')
                ->with('message', 'Erro! Autor nao encontrado!');
        }
        return view('autors.edit', compact('autors'));
    }

    //Update
    public function update(StoreUpdateAutor $request, $id){
        $autors = Autor::find($id);
        if (!$autors) {
            return redirect()
                ->route('autors.index')
                ->with('message', 'Erro! Autor nao encontrado!');
        }
        $autors->update($request->all());

        return redirect()
                ->route('autors.index')
                ->with('message', 'Autor editado com sucesso!');
    }

    //Search 
    public function search(Request $request){
        $filters = $request->except('_token');
        $autors = Autor::where('nome', 'LIKE', "%$request->search%")
            ->orWhere('area', 'LIKE', "%$request->search%")
            ->paginate();
        return view('autors.index', compact('autors', 'filters'));
    }
}
