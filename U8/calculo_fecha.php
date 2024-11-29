<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$d= $_POST['day'];
$m= $_POST['month'];
$a= $_POST['year'];

$fechafinal = date_create("$a-$m-$d");
$fechahoy = date("Y-m-d");
$fechafinal_form=date_format($fechafinal,"Y-m-d");


 

if ($fechafinal_form<$fechahoy){

    header("Location: unidad2.php?vencido");
  
 } else {
    $calculo = strtotime($fechafinal_form)-strtotime($fechahoy);
    $diasrestantes = $calculo/86400;

    header("Location: unidad2.php?total=$diasrestantes"); 
   } 

?>