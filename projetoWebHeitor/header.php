<?php
session_start();
$usuario = $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand justify-content-center navbar-dark">
        <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">HOME</a> </li>
        <?php
        if($usuario == [] || $usuario == null)
        {
            ?>
            <li class="nav-item"><a class="nav-link" href="loginScreen.php">LOGIN</a></li>
            <?php
        }
        else{
        ?>
            <li class="nav-item"><a class="nav-link" href="profileScreen.php">PROFILE</a></li>
            <li class="nav-item"><a class="nav-link" href="usersListScreen.php">USERS LIST</a></li>
            <li class="nav-item"><a class="nav-link" href="deslogar.php">LOG OUT</a></li>
        <?php
            }
        ?>
        </ul>
    </nav>