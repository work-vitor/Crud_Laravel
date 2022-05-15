<h1>Editar o livro {{$livro->titulo}}</h1>

@if ($errors->any())
    @foreach ($errors as $error)
        <p>{{$erro}}</p>
    @endforeach
@endif
<div>


    <form method="post" action="{{ route('livros.update', $livro->id)}}">

        @method('put')
        @csrf

        <p>Titulo <input type="text" name="titulo" id="titulo" value="{{$livro->titulo}}"></p>

        <p>Ano: <input type="text" name="ano" id="ano" value="{{$livro->ano}}"></p>

        <p>Idioma: <input type="text" name="idioma" id="idioma" value="{{$livro->idioma}}"></p>

        <p>ISBN: <input type="text" name="isbn" id="isbn" value="{{$livro->isbn}}"></p>

        <br>
        
        <button><a href="{{route('livros.index')}}">Voltar</a></button>
        <button type="submit">Enviar</button>
        

    </form>

</div>