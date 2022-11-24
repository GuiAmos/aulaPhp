<?php

$login = $_REQUEST['login'];
$senha = $_REQUEST['senha']; 

/*if(empty($login)){
    echo("Faltando o campo de login");
}
else{
    exit ("Seu login é ". $login);
}

if(empty($senha)){
    exit("<br>Faltando o campo da senha");
}
else{
    echo "<br>Sua senha é ". $senha;
}*/

$conexao = new PDO("mysql:host=localhost;port=3306;dbname=php-crud" ,"root", "devisate");

$conexao->setAttribute(
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
);

$comando = $conexao->prepare("
    SELECT * FROM usuario
    WHERE login = ? AND senha = ?
");

$comando->execute([$login, $senha]);

$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
var_dump($resultado);
echo "</pre>";

if(empty($resultado)){
    exit ("Usuário inválido");
}

$cliente = $resultado[0];

session_start();
$_SESSION["cliente"] = $resultado[0];
header("Location:./../front/listagem.php");


?>