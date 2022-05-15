<h1>Editar editora: {{$editora->nome}}</h1>

@if ($errors->any())
    @foreach ($errors as $error)
        <p>{{$erro}}</p>
    @endforeach
@endif
<div>


    <form method="post" action="{{ route('editora.update', $editora->id)}}">

        @method('put')
        @csrf

        <p>Nome <input type="text" name="nome" id="nome" value="{{$editora->nome}}"></p>

        <p>Local: <input type="text" name="local" id="local" value="{{$editora->local}}"></p>

        <p>Site: <input type="text" name="site" id="site" value="{{$editora->site}}"></p>

        <p>E-mail: <input type="text" name="email" id="email" value="{{$editora->email}}"></p>

        <br>
        
        <button><a href="{{route('editoras.index')}}">Voltar</a></button>
        <button type="submit">Enviar</button>
        

    </form>

</div>