<h1>Lista de Autores</h1>

<div>
    <form method="post" action="{{route('autors.search')}}">
        @csrf
        <p>Buscar:
            <input type="text" name="search" id="search" placeholder="Digite sua busca">
            <button type="submit">Buscar</button>
            <button><a href="{{route('autors.create')}}">Inserir um novo autor</a></button>
        </p>
    </form>
</div>

@foreach ($autors as $autor)
    <p>
        Nome: {{$autor->nome}}
        <a href="{{route('autors.show', $autor->id)}}">Ver detalhes</a>
    </p>
    <p>País: {{$autor->pais}}</p>
    <p>Ano de Nascimento: {{$autor->ano_nasc}}</p>
    <p>Area: {{$autor->area}}</p>
    <hr>
@endforeach

@if (session('message'))
    <div>
        <h3>{{session('message')}}</h3>
    </div>
@endif


@if (isset($filters))
    {{$autors->appends($filters)->links()}}
@else
    {{$autors->links()}}
@endif