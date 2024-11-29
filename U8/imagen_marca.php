<?php
$imagen="imagenes/azul.jpg";
$marca_agua="imagenes/marca.png";

$img = imagecreatefrompng($marca_agua);
//para que identificar la extension del archivo de base(substracción)
$ext = substr($imagen, -3);
//por si la extension llega a estar en mayúscula
$ext = strtolower($ext);


switch ($ext) {
    case 'gif':
        $image = imagecreatefromgif($imagen);
        break;
    case 'jpg':
        $image = imagecreatefromjpeg($imagen);
        break;
    case 'png' :
        $image = imagecreatefrompng($imagen);
        break;
    
}
imagecopy($image,$img,(imagesx($image)/2),(imagesy($image)/2), 0, 0,(imagesx($img)),(imagesy($img)));

header("Content-type: image/jpeg");
imagejpeg($image);
imagedestroy($img);
imagedestroy($image);
?>