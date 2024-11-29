<?php
include ("recursos.php");
$carrito->eliminar_compra($_GET['codigo_p']);
header("Location: unidad7.php");
?>