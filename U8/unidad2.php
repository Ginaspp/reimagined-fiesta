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
		<h2>Eventos</h2>
		<?php
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		?>
		<p>Hoy es <?php echo date("d/m/Y");?></p>
		
		<form action="calculo_fecha.php" method="POST">
			<input type="number" name="day" placeholder="dia" min="1" max="31" required>
			<input type="number" name="month" placeholder="mes"  min="1" max="12" required>
			<input type="number" name="year" placeholder="año" min="1900" max="2025" required>
			<input type="submit" value="Enviar">
		</form>
		<?php
	      if (isset($_GET['vencido'])) {
			echo "<p>La fecha ya pasó.</p>";
		  }
		  if(isset($_GET['total'])){
			echo"<p>Faltan ".$_GET['total']." días para la fecha.</p>";
		   }
		
	    ?>
	</section>
	<aside>

	
    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>