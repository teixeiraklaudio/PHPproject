<?php
session_start();
include("conexao.php");

if(empty($_POST['email']) || empty($_POST['nome']) || empty($_POST['senha'])){
    header('Location: cadastro.php');
}

$email = mysqli_real_escape_string($conexao, trim( $_POST['email']));
$nome = mysqli_real_escape_string($conexao, trim( $_POST['nome']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuarios where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['email_existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$sql = "INSERT INTO usuarios (email, nome, senha) VALUES ('$email,' '$nome', '$senha', NOW())";

IF($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}
$conexao->close();

header('Location: cadastro.php');
exit;
?>