<div>


    <form method="post" action="{{ route('livros.store')}}" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <p>Titulo <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}"></p>

        <p>Ano: <input type="text" name="ano" id="ano" value="{{old('ano')}}"></p>

        <p>Idioma: <input type="text" name="idioma" id="idioma" value="{{old('idioma')}}"></p>

        <p>ISBN: <input type="text" name="isbn" id="isbn" value="{{old('isbn')}}"></p>

        <p>Capa: <input type="file" name="capa" id="capa"></p>

        <br>
        
        <button><a href="{{route('livros.index')}}">Voltar</a></button>
        <button type="submit">Enviar</button>
        

    </form>

</div>