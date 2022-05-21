<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEditora;
use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    //Index
    public function index()
    {
        $editoras = Editora::orderBy('nome')->paginate(5);
        return view('editoras.index', compact('editoras'));
    }

    //create
    public function create()
    {
        return view('editoras.create');
    }

    public function store(StoreUpdateEditora $request)
    {
        Editora::create($request->all());
        return redirect()->route('editoras.index');
    }

    //Read
    public function show($id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Erro: Editora nao encontrada');
        }
        return view('editoras.show', compact('editora'));
    }

    //Delete
    public function destroy($id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Erro: Editora nao encontrada!');
        }
        $editora->delete();
        return redirect()
            ->route('editoras.index')
            ->with('message', 'Editora deletada com sucesso!');
    }

    //edit
    public function edit($id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Erro: Editora nao encontrada!');
        }
        return view('editoras.edit', compact('editora'));
    }

    //update
    public function update(StoreUpdateEditora $request, $id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Erro: Editora nao encontrada!');
        }
        $editora->update($request->all());

        return redirect()
        ->route('editoras.index')
        ->with('message', 'Editora editada com sucesso!');
    }

    //Search 
    public function search(Request $request){
        $filters = $request->except('_token');
        $editoras = Editora::where('nome', 'LIKE', "%$request->search%")
            ->orWhere('site', 'LIKE', "%$request->search%")
            ->paginate();
        return view('editoras.index', compact('editoras', 'filters'));
    }
}
