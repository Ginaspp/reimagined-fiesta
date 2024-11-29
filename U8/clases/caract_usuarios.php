<?php
		include("clases/usuarios.php");
		$usuario = new Usuarios('Gina','Pereyra Pellin','09-02-1999');

        $usuario->imprime_caracteristicas();
		?>