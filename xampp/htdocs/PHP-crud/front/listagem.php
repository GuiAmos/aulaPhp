<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel=stylesheet href="../flex.css">
    <link rel=stylesheet href="../flex-style.css">
</head>

<body>
    <?php session_start(); ?>

    <header class="box-square space-20 text-center">
        Seja bem vindo,
        <?php echo $_SESSION["cliente"]["nome"]; ?>
    </header>

    <div class="flex-col grow space-30">
        <div class="flex-row space-between">
            <h1>Listagem de Clientes</h1>
            <a href="" class="button primary">Cadastro</a>
        </div>


        <fieldset class="">
            <legend>Login</legend>
            <form method="post" class="text-center flex-row space-30">
                <input type="text" name="login" placeholder="Nome">
                <input type="password" name="senha" placeholder="CPF">
                <input type="date" name="data" placeholder="">
                <button class="button primary" type="submit">BUSCAR</button>
            </form>
        </fieldset>



        <table class="">
            <tr>
                <th>Id</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>DATA DE NASCIMENTO</th>
                <th>AÇÕES</th>
            </tr>

            <tr>
                <th>//</th>
                <th>//</th>
                <th>//</th>
                <th>//</th>
                <th>Editar Excluir</th>
            </tr>

            <tr>
                <th>//</th>
                <th>//</th>
                <th>//</th>
                <th>//</th>
                <th>Editar Excluir</th>
            </tr>

        </table>

    </div>








    <footer class="box-square space-20 text-center">
        Paulo Guilherme <?php echo date('Y') ?>
    </footer>



</body>

</html>