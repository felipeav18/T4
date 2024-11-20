<html>
	<head>
	<title>VIAJES VIP</title>
    <link rel="stylesheet" href="css/eliminar.css">
    <link rel="icon" href="/imagen/logo.webp">
		<meta charset="UTF-8" />
	</head>
	<body>
		<form action="eliminar3.php" method="post">
			<h2>ELIMINAR</h2>
			<select name="nombreOriginal">
			<?php
				include 'conexion2.php';
				$consulta = $conexion2 -> query ("SELECT nombre FROM compania ORDER BY nombre ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['nombre'].'</option>';
					}
			?>
			</select>			
			<input type="submit" class="borrar"value="Borrar!!" />
		</form>
	</body>
</html>