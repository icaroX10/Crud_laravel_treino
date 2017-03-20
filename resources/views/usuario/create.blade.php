@include('usuario.header')
<div class="col-lg-12">
    <div class="col-lg-9 col-lg-offset-3">
        <h1>Cadastrar usuario</h1>
            <form class="form_creat" action="/usuario" method="POST">
               <label for="name">Nome:</label><br/>
                <input type="text" name="nome" value="" placeholder="Nome">
                {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
                <label for="email">Email:</label><br/>
                <input type="text" name="email" value="" placeholder="Email">
                {{ ($errors->has('email')) ? $errors->first('email') : '' }}<br>
                <label for="senha">Senha:</label><br/>
                <input type="password" name="senha" value="" placeholder="Senha">
                {{ ($errors->has('senha')) ? $errors->first('senha') : '' }}<br>
                <input type="hidden" name="tipousuario" value="2" >
                {{ ($errors->has('tipousuario')) ? $errors->first('tipousuario') : '' }}<br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="name" value="Cadastrar">
            </form>

    </div>
</div>
@include('usuario.footer')