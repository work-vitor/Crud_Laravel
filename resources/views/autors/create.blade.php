<div>


    <form method="post" action="{{ route('autors.store')}}">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <p>Nome <input type="text" name="nome" id="nome" value="{{old('nome')}}"></p>

        <p>País: <input type="text" name="pais" id="pais" value="{{old('pais')}}"></p>

        <p>Ano de Nascimento: <input type="text" name="ano_nasc" id="ano_nasc" value="{{old('ano_nasc')}}"></p>

        <p>Area: <input type="text" name="area" id="area" value="{{old('area')}}"></p>

        <br>
        
        <button><a href="{{route('autors.index')}}">Voltar</a></button>
        <button type="submit">Enviar</button>
        

    </form>

</div>