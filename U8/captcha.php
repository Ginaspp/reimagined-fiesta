<?php 
session_start();
header("Content-type: image/jpeg");

$imagen= imagecreate(100,50);
$fondo=imagecolorallocate($imagen,240, 58, 82);
$texto=imagecolorallocate($imagen,255, 245, 246);

imagestring($imagen, 5, 30, 20, $_SESSION['captcha'], $texto );
imagejpeg($imagen);
?>