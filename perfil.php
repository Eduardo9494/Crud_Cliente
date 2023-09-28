<?php

session_start();
if(empty($_SESSION['usuario'])) header("location: login.php");
include_once "encabezado.php";
include_once "navbar.php";
include_once "funciones.php";
$nombreUsuario = $_SESSION['usuario'];
$idUsuario = $_SESSION['idUsuario'];
?>

