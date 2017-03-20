<link rel="stylesheet" href="/css/reset.css" >
<link rel="stylesheet" href="/css/bootstrap.css" >
<link rel="stylesheet" href="/css/bootstrap-theme.css" >
<link rel="stylesheet" href="/css/style.css" >
@include('usuario.header')
@include('usuario.conteudo')
<h1>Perfil</h1>
<h2>Nome: {{ $detailpage->nome }}</h2>
<h3>
    <b>Email:</b>{{ $detailpage->email }}<br/>
    <b>Tipo de usuario:</b>{{ $detailpage->tipousuario }}
        
</h3>
<a href="/index">Voltar</a>
@include('usuario.footer')