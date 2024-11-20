<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIAJES VIP</title>
	<link rel="stylesheet" href="css/welcome.css">
	<link rel="icon" href="/imagen/logo.webp">
</head>
<body>
	<form action="recoger2.php" method="post">
		<h1>¡Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
		<input type="text" name="nombre" size="20" placeholder="Escriba su nombre" /><br/>
		<input type="number" name="Edad" min="10" max="75" placeholder="Edad" /><br/>
		<input type="text" name="Direccion" placeholder="Direccion"> <br>
		<input type="date" name="Fecha" placeholder="Fecha" /><br/>
		<label for="VIP">¿Eres un cliente VIP?</label>
		<div class="radio-group">
			<input type="radio" name="VIP" value="si" id="vip-si">
			<label for="vip-si">Sí</label>

			<input type="radio" name="VIP" value="no" id="vip-no">
			<label for="vip-no">No</label>
		</div>
		<select name="Provincia">
			<option>Madrid</option>
			<option>Sevilla</option>
			<option>Bilbao</option>
			<option>Barcelona</option>
		</select>
		<div class="enlaces">
			<a href="busque.php" class="enlace">Consulta</a><br>
			<a href="eliminar2.php" class="enlace">Eliminar</a><br>  
			<a href="actualizar4.php" class="enlace">Actualizar</a><br>
		</div>
		<input type="submit" class="guardar" value="Guardar!!" />
		<a href="logout.php" class="enlace">Cerrar sesión</a>
	</form>
</body>
</html>
