<h1>Lista de Livros</h1>

<div>
    <form method="post" action="{{route('livros.search')}}">
        @csrf
        <p>Buscar:
            <input type="text" name="search" id="search" placeholder="Digite sua busca">
            <button type="submit">Buscar</button>
            <button><a href="{{route('livros.create')}}">Inserir um novo Livro</a></button>
        </p>
    </form>
</div>

<hr>

@foreach ($livros as $livro)

    <p>
        Titulo: {{$livro->titulo}}
        <a href="{{route('livros.show', $livro->id)}}">Ver detalhes</a>
    </p>
    <p>Ano: {{$livro->ano}}</p>
    <p>Idioma: {{$livro->idioma}}</p>
    <p>ISBN: {{$livro->isbn}}</p>
    <hr>
@endforeach

@if (session('message'))
    <div>
        <h3>{{session('message')}}</h3>
    </div>
@endif


@if (isset($filters))
    {{$livros->appends($filters)->links()}}
@else
    {{$livros->links()}}
@endif
