<html>
	<head>
	<title>VIAJES VIP</title>
	<link rel="stylesheet" href="css/actualizar.css">
	<link rel="icon" href="/imagen/logo.webp">
		<meta charset="UTF-8" />
	</head>
	<body>
		<form action="actualizar5.php" method="post">
		<h1>ACTUALIZAR</h1>	
		<h2>Nombre actual</h2>	
			<select name="nombreOriginal">
			<?php
				include 'conexion2.php';
				$consulta = $conexion2 -> query ("SELECT nombre FROM compania ORDER BY nombre ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['nombre'].'</option>';
					}
			?>
			</select>
			<h2>Nombre nuevo</h2>
			<input type="text" name="nuevoNombre" /><br/>
			<input type="submit" value="Cambiar!!" />
		</form>
	</body>
</html>