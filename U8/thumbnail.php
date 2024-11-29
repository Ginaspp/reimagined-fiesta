<?php
$src_image= imagecreatefromjpeg("imagenes/unidad4.jpg");
//reducción de la imagen manteniendo el mismo formato se usarian dos variables $alto;$ancho pero en este caso uso una funcion para determinar ancho y alto

$dst_img= imagecreatetruecolor(150,150);
$imagen= imagecreate(150,150);
imagecopyresized($dst_img, $src_image, 0, 0, 0, 0, 150, 150, imagesx($src_image), imagesy($src_image));
imagejpeg($dst_img,"imagenes/unidad4thumb.jpg");
imagedestroy($dst_img);

?>