<?php
include('clasesusuarios.php');

$usuario = $_POST['mail'];
$contrasena = $_POST['contrasena'];

$cargar = new Usuario ($baseDatos);

$cargar->cargar_usuario($usuario, $contrasena);

header("Location:../unidad8.php?okreg");
exit()


/* directo con php 
include('../recursos.php');

$usuario = $_POST['mail'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT, array('cost'=>4));

$baseDatos->ejecutarQuery("INSERT INTO registro VALUES (DEFAULT,'$usuario','$contrasena')");

header("Location:../unidad8.php?okreg")*/ 
?>