<h1>Lista de Editoras</h1>

<div>
    <form method="post" action="{{route('editoras.search')}}">
        @csrf
        <p>Buscar:
            <input type="text" name="search" id="search" placeholder="Digite sua busca">
            <button type="submit">Buscar</button>
            <button><a href="{{route('editoras.create')}}">Inserir uma nova editora</a></button>
        </p>
    </form>
</div>
<hr>

@foreach ($editoras as $editora)
    <p>
        Nome: {{$editora->nome}}
        <a href="{{route('editoras.show', $editora->id)}}">Ver detalhes</a>
    </p>
    <p>Local: {{$editora->local}}</p>
    <p>Site: {{$editora->site}}</p>
    <p>E-mail: {{$editora->email}}</p>
    <hr>
@endforeach

@if (session('message'))
    <div>
        <h3>{{session('message')}}</h3>
    </div>
@endif

@if (isset($filters))
    {{$editoras->appends($filters)->links()}}
@else
    {{$editoras->links()}}
@endif