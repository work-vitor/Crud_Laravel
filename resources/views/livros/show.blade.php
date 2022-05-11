<h1>Detalhes do Livro {{$livro->titulo}}</h1>

<ul>

    <li>ISBN: {{$livro->isbn}}</li>
    <li>Ano: {{$livro->ano}}</li>
    <li>Iidoma: {{$livro->idioma}}</li>

    
</ul>

<hr>
<a href="{{route('livros.index')}}">Voltar</a>