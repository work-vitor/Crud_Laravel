<h1>Detalhes do Autor {{$autors->nome}}</h1>

<ul>

    <li>Local: {{$autors->pais}}</li>
    <li>Ano Nascimento: {{$autors->ano_nasc}}</li>
    <li>Area: {{$autors->area}}</li>

    
</ul>

<form action="" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button><a href="{{route('autors.index')}}">Voltar</a></button>
    <button type="submit">Deleta a editora </button>
    <button ><a href="">Editar Autor</a> </button>
</form>
<hr>