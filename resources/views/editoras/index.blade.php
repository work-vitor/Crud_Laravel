<h1>Lista de Editoras</h1>

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

<button><a href="{{route('editoras.create')}}">Inserir uma nova editora</a></button>