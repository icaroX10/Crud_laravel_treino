<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body>
       <div class="col-lg-12 col-xs-12">
           <div class="content">
               <div class="row">
                   <span class="logo">Teste de conhecimento</span>
               </div>
           </div>
       </div>
        <div class="col-lg-3 col-xs-3 header">
            <div class="content">
                <ul>
                    <li><a href="<?php echo e(url('/index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('/details')); ?>">Perfil</a></li>
                    <?php if($usuario->tipousuario): ?>
                    <li><a href="<?php echo e(url('/create')); ?>">Cadastro</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo e(url('/edit')); ?>">Editar</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
