<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/css/reset.css" >
    <link rel="stylesheet" href="/css/login.css" >
</head>
<body>
   <div class="logar">
        <h1>Login</h1>
        <form class="form_log" action="/logar" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" value="" placeholder="Email">
            <label for="senha">Senha</label>
            <input type="password" name="senha">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="submit" name="logar" value="logar">
        </form>           
   </div>
    
</body>

</html>
