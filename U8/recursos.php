<?php
include('clases/basededatos.php');
include('constantes.php');
include('clases/producto.php');
include('clases/carrito.php');

$baseDatos = new BaseDatos (SERVIDOR, USUARIO, PASS, BASE);
$productos = new Productos ($baseDatos);
$carrito = new Carrito ($baseDatos);
?>