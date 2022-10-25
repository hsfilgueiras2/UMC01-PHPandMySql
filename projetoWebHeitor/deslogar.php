<?php
session_start();
$usuario = null;
$_SESSION['usuario'] = $usuario;
header("Location: index.php");
