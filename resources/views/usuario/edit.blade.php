<link rel="stylesheet" href="/css/reset.css" >
<link rel="stylesheet" href="/css/bootstrap.css" >
<link rel="stylesheet" href="/css/bootstrap-theme.css" >
<link rel="stylesheet" href="/css/style.css" >
@include('usuario.header')
@include('usuario.conteudo')
<h1>Editar Usuario</h1>
<form action="/usuario/{{ $detailpage->id }}" method="POST">
    <input type="text" name="nome" value="{{ $detailpage->nome }}" placeholder="Nome">
    {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
    <input type="text" name="email" value="{{ $detailpage->email }}" placeholder="Email">
    {{ ($errors->has('email')) ? $errors->first('email') : '' }}<br>
    <input type="password" name="senha" value="{{ $detailpage->senha }}" placeholder="Senha">
    {{ ($errors->has('senha')) ? $errors->first('senha') : '' }}<br>
    <input type="text" name="tipousuario" value="{{ $detailpage->tipousuario }}" placeholder="Tipo de Usuario">
    {{ ($errors->has('tipousuario')) ? $errors->first('tipousuario') : '' }}<br>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="name" value="Salvar">
</form>
@include('usuario.footer')