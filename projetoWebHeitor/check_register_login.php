<?php

include "database.php";

$loginUsername = $_POST['loginUsername'];
$loginPassword = $_POST['loginPassword'];
$loginType = $_POST['loginType'];
//Teste de verificação - Analisando se as informações do formulário estavam sendo enviadas
//echo $nome_aluno. "<br>". $email_aluno. "<br>".  $telefone_aluno;

$sql = "INSERT INTO heitor_users_login (user_username, user_password, user_type) 
    VALUES ('$loginUsername', '$loginPassword', '$loginType')";
$sqlInfo = "INSERT INTO heitor_users_info (user_username, user_password) 
     VALUES ('$loginUsername', '$loginPassword')";

if (mysqli_query($conexao, $sql)) {
    mysqli_query($conexao, $sqlInfo);
    header("Location: loginScreen.php");
} else {
    echo "Falha ao cadastrar no banco de dados";
}
