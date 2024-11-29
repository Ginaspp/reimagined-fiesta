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
		<h2>Comentarios</h2>
		<form action="comentarios.php" method="POST">
          <input type="text" name="nombre" placeholder="Nombre y apellido" maxlength="50" required>
		  <input type="email" name="mail" placeholder="Mail" maxlength="100" required>
		  <textarea name="comentarios" placeholder="Escriba su comentario"  required></textarea>
		  <input type="submit" name="Enviar">
		</form>
		<?php
		if(isset($_GET['ok'])){
		echo "<h4>ENVIADO!</h4>";	
		}

		$file=fopen('comentarios.txt','r');
        fpassthru($file);
        fclose($file);
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