<?php session_start();?>
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
		<h2>Consultas</h2>
		<?php function contenido (){
			 $patron="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890#$%&!?";
			  $clave='';
			  for ($i=0; $i < 5; $i++){
                 $clave .= $patron[rand(0,42)];
			  }
			  return $clave;
		} 
		$_SESSION ['captcha'] = contenido(); 
		?>
		<form action="cargar.php" method="POST">
			<input type="text" name="Nombre" placeholder="Nombre"  maxlength="20" required >
			<input type="text" name="Apellido" placeholder="Apellido" maxlength="50" required>
			<input type="email" name="Mail" placeholder="Mail" maxlength="100" required>
			<textarea name="Consulta" placeholder="Escriba su consulta" required ></textarea>
			<img src="captcha.php" >
			<input type="text" name="codigo" placeholder="Escriba el código" placeholder="" required>
			<input type="submit" name="Enviar">
		</form>
         <?php 
		 if (isset($_GET['ok'])){
			echo "<p>Su consulta fue enviada con exito!</p>";
		 }
		 if(isset($_GET['error'])){
			echo"<p>Error al enviar! Verifique que todo esté bien escrito.</p>";
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