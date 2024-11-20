
<?php

$nombre= $_POST['nombre'];
$Edad= $_POST['Edad'];
$Direccion= $_POST['Direccion'];
$Fecha=$_POST['Fecha'];
$VIP= $_POST['VIP'];
$Provincia= $_POST['Provincia'];


include 'conexion2.php';
$consulta = $conexion2 -> query("INSERT INTO compania(nombre,Edad,Direccion,Fecha,VIP,Provincia) VALUES ('$_REQUEST[nombre]','$_REQUEST[Edad]','$_REQUEST[Direccion]','$_REQUEST[Fecha]','$_REQUEST[VIP]','$_REQUEST[Provincia]')");

echo "correcto";
?>