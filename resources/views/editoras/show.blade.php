<h1>Detalhes da Editora {{$editora->nome}}</h1>

<ul>

    <li>Local: {{$editora->local}}</li>
    <li>site: {{$editora->site}}</li>
    <li>E-mail: {{$editora->email}}</li>

    
</ul>

<form action="{{route('editoras.destroy', $editora->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button><a href="{{route('editoras.index')}}">Voltar</a></button>
    <button type="submit">Deleta a editora </button>
    <button ><a href="{{route('editoras.edit', $editora->id)}}">Editar o livro</a> </button>
</form>
<hr>