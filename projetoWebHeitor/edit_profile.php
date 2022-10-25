<?php
  include ("database.php");
  session_start();
  $usuario = $_SESSION['usuario'];
  $currentUsername = $usuario['username'];
  $currentPassword = $usuario['password'];

$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$identification = $_POST['identification'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$pictureURL = $_POST['pictureURL'];
$bio = $_POST['bio'];

$sql = "SELECT * FROM heitor_users_login WHERE user_username='$currentUsername' AND user_password='$currentPassword'";
$resultado = mysqli_query($conexao, $sql);
$dadosLogin = mysqli_fetch_assoc($resultado);
$sqlInfo = "SELECT * FROM heitor_users_info WHERE user_username='$currentUsername' AND user_password='$currentPassword'";
$resultadoInfo = mysqli_query($conexao, $sqlInfo);
$dadosInfo = mysqli_fetch_assoc($resultadoInfo);



if($username == null)$username = $dadosInfo['user_username'];
if($password == null)$password = $dadosInfo['user_password'];
if($fullname == null)$fullname = $dadosInfo['user_fullname'];
if($email == null)$email = $dadosInfo['user_email'];
if($identification == null)$identification = $dadosInfo['user_identification'];
if($telephone == null)$telephone = $dadosInfo['user_tele'];
if($address == null)$address = $dadosInfo['user_address'];
if($birthday == null)$birthday = $dadosInfo['user_birthday'];
if($pictureURL == null)$pictureURL = $dadosInfo['user_pictureURL'];
if($bio == null)$bio = $dadosInfo['user_bio'];

$idLogin = $dadosLogin['ID'];
$idInfo = $dadosInfo['ID'];


$updateLogin = "UPDATE `heitor_users_login` SET `user_username` = '$username', `user_password` = '$password' WHERE `heitor_users_login`.`ID` = $idLogin";

$updateInfo = "UPDATE `heitor_users_info` SET `user_username` = '$username', `user_password` = '$password', `user_fullname` = '$fullname', `user_email` = '$email', `user_identification` = '$identification', `user_tele` = '$telephone', `user_address` = '$address', `user_birthday` = '$birthday', `user_pictureURL` = '$pictureURL', `user_bio` = '$bio' WHERE `heitor_users_info`.`ID` = $idInfo";

$sendUpdateLogin = mysqli_query($conexao, $updateLogin);
$sendUpdateInfo = mysqli_query($conexao, $updateInfo);

$sql = "SELECT * FROM heitor_users_login WHERE user_username='$username' AND user_password='$password'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);

$usuario = array("username"=>$dados['user_username'], "password"=>$dados['user_password'], "type"=>$dados['user_type']);
$_SESSION['usuario'] = $usuario;

header("Location: profileScreen.php");