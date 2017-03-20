<link rel="stylesheet" href="/css/reset.css" >
<link rel="stylesheet" href="/css/bootstrap.css" >
<link rel="stylesheet" href="/css/bootstrap-theme.css" >
<link rel="stylesheet" href="/css/style.css" >
<?php echo $__env->make('usuario.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('usuario.conteudo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h1>Editar Usuario</h1>
<form action="/usuario/<?php echo e($detailpage->id); ?>" method="POST">
    <input type="text" name="nome" value="<?php echo e($detailpage->nome); ?>" placeholder="Nome">
    <?php echo e(($errors->has('nome')) ? $errors->first('nome') : ''); ?><br>
    <input type="text" name="email" value="<?php echo e($detailpage->email); ?>" placeholder="Email">
    <?php echo e(($errors->has('email')) ? $errors->first('email') : ''); ?><br>
    <input type="password" name="senha" value="<?php echo e($detailpage->senha); ?>" placeholder="Senha">
    <?php echo e(($errors->has('senha')) ? $errors->first('senha') : ''); ?><br>
    <input type="text" name="tipousuario" value="<?php echo e($detailpage->tipousuario); ?>" placeholder="Tipo de Usuario">
    <?php echo e(($errors->has('tipousuario')) ? $errors->first('tipousuario') : ''); ?><br>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="submit" name="name" value="Salvar">
</form>
<?php echo $__env->make('usuario.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>