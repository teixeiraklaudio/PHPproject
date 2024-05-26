<?php
session_start();
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="../css/signin.css" />
<button id="send"><a href="projeto.php" rel="before">Início</a></button>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Informe seus dados para cadastro e sorteio</h1>
    <form action="" method="POST">
        <P>
            <label>E-mail</label>
            <input type="text" name="email">
        </P>
        <P>
            <label>Nome</label>
            <input type="text" name="nome">
        </P>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button id="send"><a href ="cadastro2.php" rel="next">Cadastrar</a></button>
</body>
</html>