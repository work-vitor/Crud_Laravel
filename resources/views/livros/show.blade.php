<h1>Detalhes do Livro {{$livro->titulo}}</h1>

<ul>

    <li>ISBN: {{$livro->isbn}}</li>
    <li>Ano: {{$livro->ano}}</li>
    <li>Iidoma: {{$livro->idioma}}</li>
    <li>Capa: <br>
        <img src="{{url("storage/{$livro->capa}")}}" alt="{{$livro->titulo}}" style="max-width:100px">
    </li>
    <li>MíDIA</li>
    <li>Nome da mídia: {{$midia->nome}}</li>
    <li>Descrição da mídia: {{$midia->descricao}}</li>


    
</ul>
<form action="{{route('livros.destroy', $livro->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button><a href="{{route('livros.index')}}">Voltar</a></button>
    <button type="submit">Deleta o livro </button>
    <button ><a href="{{route('livros.edit', $livro->id)}}">Editar o livro</a> </button>
</form>
<hr>
