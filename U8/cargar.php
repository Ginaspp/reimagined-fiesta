<?php
session_start();

$nombre= $_POST['Nombre'];
$apellido= $_POST['Apellido'];
$mail= $_POST['Mail'];
$consulta= $_POST['Consulta'];

if($_POST['codigo']==$_SESSION['captcha']){
 include ('conexionbd.php');

 mysqli_query($conexion_bd, "INSERT INTO consultas VALUES
 (DEFAULT,'$nombre', '$apellido','$mail','$consulta')");

 header("Location: unidad5.php?ok");
} else {
    header("Location: unidad5.php?error");
}


?>