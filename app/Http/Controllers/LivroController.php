<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLivro;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    //index
    public function index()
    {
        $livros = Livro::orderBy('titulo')->paginate(5);
        return view('livros.index', compact('livros'));
    }

    //create
    public function create()
    {
        return view('livros.create');
    }

    public function store(StoreUpdateLivro $request)
    {
        Livro::create($request->all());

        return redirect()->route('livros.index');
    }

    //read
    public function show($id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não encontrado');
        }
        return view('livros.show', compact('livro'));
    }

    //delete
    public function destroy($id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Erro ao deletar o livro!');
        }
        $livro->delete();
        return redirect()
            ->route('livros.index')
            ->with('message', 'Livro deletado com sucesso');
    }

    //edit
    public function edit($id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Erro: Livro não encontrado');
        }
        return view('livros.edit', compact('livro'));
    }

    public function update(StoreUpdateLivro $request, $id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Erro: Livro não encontrado');
        }

        $livro->update($request->all());
        return redirect()
            ->route('livros.index')
            ->with('message', 'Livro Editado com sucesso!');
    }

    //Search
    public function search(Request $request){
        $filters = $request->except('_token');
        $livros = Livro::where('titulo', 'LIKE', "%$request->search%")
            ->orWhere('idioma', 'LIKE', "%$request->search%")
            ->paginate();
        return view('livros.index', compact('livros', 'filters'));
    }
}
