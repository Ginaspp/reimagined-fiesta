<?php
$unidadform = $_POST['unidad'];
$fechaform = $_POST['fecha'];

include ('conexionbd.php');

mysqli_query($conexion_bd, "INSERT INTO clases VALUES
(DEFAULT,'$unidadform', '$fechaform')");

header("Location: unidad1.php?ok");

?>