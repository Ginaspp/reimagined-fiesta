<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$fecha=date("Y-m-d G:i");

if(isset($_POST['Enviar'])){

    $contenido= "<p>Nombre y Apellido: ".$_POST['nombre']."</p> 
    <p>Mail: ".$_POST['mail']."</p><p>Comentario: ".$_POST['comentarios']."</p><p>Fecha y Hora: ".$fecha." </p> <hr/>";

    $file=fopen('comentarios.txt','a+') or die ("No se puede abrir el archivo");
    fputs($file, $contenido);
    
    fclose($file);
} 

header('Location:unidad3.php?ok');

?>