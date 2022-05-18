<h1>Detalhes do Livro {{$livro->titulo}}</h1>

<ul>

    <li>ISBN: {{$livro->isbn}}</li>
    <li>Ano: {{$livro->ano}}</li>
    <li>Iidoma: {{$livro->idioma}}</li>

    
</ul>
<form action="{{route('livros.destroy', $livro->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button><a href="{{route('livros.index')}}">Voltar</a></button>
    <button type="submit">Deleta o livro </button>
    <button ><a href="">Editar o livro</a> </button>
</form>
<hr>
