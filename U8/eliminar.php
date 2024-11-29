<?php
include("conexionbd.php");
$idclase = $_GET['id_clase'];
mysqli_query($conexion_bd, "DELETE FROM clases WHERE id_clase = '$idclase' ");

header("Location: unidad1.php ");
?>