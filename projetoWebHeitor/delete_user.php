<?php
include ("database.php");
$usernameToDelete = $_POST['username'];
$passwordToDelete = $_POST['password'];

$sql = "SELECT * FROM heitor_users_login WHERE user_username='$usernameToDelete' AND user_password='$passwordToDelete'";
$resultado = mysqli_query($conexao, $sql);
$dadosLogin = mysqli_fetch_assoc($resultado);
$sqlInfo = "SELECT * FROM heitor_users_info WHERE user_username='$usernameToDelete' AND user_password='$passwordToDelete'";
$resultadoInfo = mysqli_query($conexao, $sqlInfo);
$dadosInfo = mysqli_fetch_assoc($resultadoInfo);

$delInfoID = $dadosInfo['ID'];

$delUserInfo = "DELETE FROM `heitor_users_info` WHERE `heitor_users_info`.`ID` = $delInfoID ";
$actionDelInfo = mysqli_query($conexao, $delUserInfo);

$delLoginID = $dadosLogin['ID'];

$delUserLogin = "DELETE FROM `heitor_users_login` WHERE `heitor_users_login`.`ID` = $delLoginID ";

$actionDelLogin = mysqli_query($conexao, $delUserLogin);

header("Location: usersListScreen.php");