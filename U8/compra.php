<?php
include ("recursos.php");
$carrito->introducir_compra($_GET['codigo_prod'], $_GET['producto_prod'], $_GET['desccripcion_prod'], $_GET['precio_prod']);
header("Location: unidad7.php");
?>