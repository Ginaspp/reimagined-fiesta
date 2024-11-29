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
		<h2>Registro</h2>
		
		<form action="clases/cargarusuario.php" method="POST">
		  <input type="email" name="mail" placeholder="email" maxlength="100" required>
		  <input type="password" name="contrasena" placeholder="contraseña" maxlength="8" required>
		  <input type="submit" name="Registrarse">
		</form>
		<?php
		if(isset($_GET['okreg'])){
		echo "<h4>Usted fue registrado con éxito.</h4>";	
		} ?>
      
	  <h2>Ingresar</h2>
		<form action="clases/verificarusuario.php" method="POST">
		  Usuario: <br /><input type="email" name="mail" placeholder="email" maxlength="100" required><br />
		  Contraseña: <br /><input type="password" name="contrasena" placeholder="contraseña" maxlength="8" required><br />
		  <input type="submit" name="Ingresar">
		</form>
		<?php
		if(isset($_GET['oking'])){	
			echo "<h4>Su usuario fué verificado con éxito!</h4>";
		}
		if(isset($_GET['errorUsuario'])){	
			echo "<h4>Usuario no existente!</h4>";
		}
		if(isset($_GET['errorContra'])){
			echo "<h4>Contraseña incorrecta.</h4>";
		}
		if(isset($_GET['errorVerificacion'])){
			echo "<h4>Error de verificación</h4>";
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