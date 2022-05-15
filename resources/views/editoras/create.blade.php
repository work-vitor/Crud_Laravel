<div>


    <form method="post" action="{{ route('editoras.store')}}">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <p>Nome <input type="text" name="nome" id="nome" value="{{old('nome')}}"></p>

        <p>Local: <input type="text" name="local" id="local" value="{{old('local')}}"></p>

        <p>Site: <input type="text" name="site" id="site" value="{{old('site')}}"></p>

        <p>E-mail: <input type="email" name="email" id="email" value="{{old('email')}}"></p>

        <br>
        
        <button><a href="{{route('editoras.index')}}">Voltar</a></button>
        <button type="submit">Enviar</button>
        

    </form>

</div>