<link rel="stylesheet" href="/css/reset.css" >
<link rel="stylesheet" href="/css/bootstrap.css" >
<link rel="stylesheet" href="/css/bootstrap-theme.css" >
<link rel="stylesheet" href="/css/style.css" >
<?php echo $__env->make('usuario.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('usuario.conteudo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h1>Perfil</h1>
<h2>Nome: <?php echo e($detailpage->nome); ?></h2>
<p>
    <b>Email:</b><?php echo e($detailpage->email); ?><br/>
    <b>Senha:</b><?php echo e($detailpage->senha); ?><br/>
    <b>Tipo de usuario:</b><?php echo e($detailpage->tipousuario); ?>

        
</p>
<a href="/index">Voltar</a>
<?php echo $__env->make('usuario.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>