<?php
include("conexionbd.php");
$consulta_clases = mysqli_query($conexion_bd,"SELECT * FROM clases");

while($listarunidades = mysqli_fetch_assoc($consulta_clases)){
?>
<div>
    <h3>Unidad: <?php echo $listarunidades['unidad']; ?></h3>
    <h4>Fecha: <?php echo $listarunidades['fecha']; ?> </h4>
    <p><a href="eliminar.php?id_clase=<?php echo $listarunidades['id_clase'];?>">Eliminar</a></p>
</div>

<?php } ?>
