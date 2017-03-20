<?php echo $__env->make('usuario.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('usuario.conteudo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo e(Session::get('message')); ?>

<h1>Usuario</h1>
 
    <?php $__currentLoopData = $todosusuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2>Nome:<a href="/usuario/<?php echo e($usuario->id); ?>"><?php echo e($usuario->nome); ?></a></h2>
        <p><b>Email:</b><?php echo e($usuario -> email); ?></p>
        <p><b>Tipo de usuario:</b><?php echo e($usuario -> tipousuario); ?></p>
        <a href="/usuario/<?php echo e($usuario->id); ?>/edit">Editar</a>
        <form action="/usuario/<?php echo e($usuario->id); ?>" method="POST">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="submit" name="name" value="Apagar">
        </form>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php echo $__env->make('usuario.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>