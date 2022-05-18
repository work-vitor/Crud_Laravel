<h1>Editar Autor: {{$autors->nome}}</h1>

@if ($errors->any())
    @foreach ($errors as $error)
        <p>{{$erro}}</p>
    @endforeach
@endif
<div>


    <form method="post" action="{{ route('autors.update', $autors->id)}}">

        @method('put')
        @csrf

        <p>Nome <input type="text" name="nome" id="nome" value="{{$autors->nome}}"></p>

        <p>País: <input type="text" name="pais" id="pais" value="{{$autors->pais}}"></p>

        <p>Ano Nascimento: <input type="text" name="ano_nasc" id="ano_nasc" value="{{$autors->ano_nasc}}"></p>

        <p>Area: <input type="text" name="area" id="area" value="{{$autors->area}}"></p>

        <br>
        
        <button><a href="{{route('autors.index')}}">Voltar</a></button>
        <button type="submit">Enviar</button>
        

    </form>

</div>