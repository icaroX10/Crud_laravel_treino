@include('usuario.header')
@include('usuario.conteudo')
{{ Session::get('message') }}
<h1>Usuario</h1>
 
    @foreach($todosusuarios as $usuario)
        <h2>Nome:<a href="/usuario/{{ $usuario->id }}">{{ $usuario->nome }}</a></h2>
        <p><b>Email:</b>{{ $usuario -> email }}</p>
        <p><b>Tipo de usuario:</b>{{ $usuario -> tipousuario }}</p>
        <a href="/usuario/{{ $usuario->id }}/edit">Editar</a>
        <form action="/usuario/{{ $usuario->id }}" method="POST">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="Apagar">
        </form>
        <hr>
    @endforeach
    
@include('usuario.footer')