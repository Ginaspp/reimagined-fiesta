<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Ver Productos</h2>
		<table>
			<tr>
			   
				<th>Producto</th>
				<th>Descripción</th>
				<th>Precio</th>
			</tr>
			<?php
				include('recursos.php'); 
				$mostrar_productos = $productos->listar_productos(); 
			   for($i=0; $i<count($mostrar_productos); $i++){
			?>
			<tr>
			   
				<td><?php echo $mostrar_productos[$i]['producto']; ?></td>
				<td><?php echo $mostrar_productos[$i]['descripcion']; ?></td>
				<td><?php echo $mostrar_productos[$i]['precio']; ?></td>
				<td><a href="compra.php?
				 codigo_prod= <?php echo $mostrar_productos[$i]['codigo']; ?>&
				 producto_prod= <?php echo $mostrar_productos[$i]['producto']; ?>&
				 descripcion_prod= <?php echo $mostrar_productos[$i]['descripcion']; ?>&
				 precio_prod= <?php echo $mostrar_productos[$i]['precio']; ?>
				 ">Comprar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</section>
	<aside>
    <h2>Compras</h2>
		<table>
		<tr>	
		    <th>Producto</th>
			<th>Precio</th>
		</tr>
		<?php
		$mostrar_carrito = $carrito->listar_compra();
		for($i=0; $i<count($mostrar_carrito); $i++) {
		?>
		<tr>  
			<td><?php echo $mostrar_carrito[$i]['producto']; ?></td>
			<td><?php echo $mostrar_carrito[$i]['precio']; ?></td>
			<td><a href="eliminarcompra.php?codigo_p=<?php echo $mostrar_carrito[$i]['codigo']; ?>">Eliminar</a></td>
		</tr>
		<?php } ?>
		</table>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>