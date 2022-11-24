<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|PHP CRUD</title>
    <link rel="stylesheet" href="flex.css">
    <link rel="stylesheet" href="flex-style.css">
</head>
<body class="flex-col children-center flex-flavor">
    
    <fieldset class="text-center">
        <legend>Login</legend>
        <form action="back/login.php" method="post" class="flex-col space-30">
           <input type="text" name="login" placeholder="Login">
           <input type="password" name="senha" placeholder="Senha">
           <button class="button primary" type="submit">ENTRAR</button> 
        </form>
    </fieldset>

</body>
</html>