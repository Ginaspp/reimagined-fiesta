<?php 
include ('basededatos.phpphp');
$conexion= mysqli_connect('localhost','root','', 'phpavanzado');

$usuario = $_POST['mail'];
$contrasena = $_POST['contrasena'];

$consultar_usuario= mysqli_query($conexion,"SELECT * FROM registro WHERE  usuario = '$usuario'");

if(mysqli_num_rows($consultar_usuario) == 1){
 $separarDatos = mysqli_fetch_assoc($consultar_usuario);
 $validacion = password_verify($contrasena, $separarDatos['contrasena']);

 if($validacion){
    header('Location:../unidad8.php?oking');
 } else {
    header('Location:../unidad8.php?errorContra');
 }
 
} else {
    header ("Location:../unidad8.php?errorUsuario");
}
?>