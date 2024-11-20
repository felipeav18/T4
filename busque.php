<?php
// sr. aprendiz, crear una bd y una tabla para buscar los datos que aparecen, 
//Configuración de la conexión a la base de datos
// deben cambiar estilos y maquetacion a su gusto
$servername = "localhost";
$username = "root"; // Cambiar
$password = "";     // Cambiar
$dbname = "almacen";

// Crear conexión con clase mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

//  siempre Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario de búsqueda
if (isset($_POST['buscar'])) {
    $criterio = $_POST['criterio'];
    
    // Consulta mySQL para buscar en la tabla 'clientes'
    $sql = "SELECT * FROM compania WHERE nombre LIKE '%$criterio%' OR Edad LIKE '%$criterio%' OR Direccion LIKE '%$criterio%' OR Fecha LIKE '%$criterio%' OR VIP LIKE '%$criterio%' OR Provincia LIKE '%$criterio%'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Mostrar resultados de búsqueda
        echo "<h2>Resultados de la búsqueda:</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th>VIP</th>
                    <th>Provincia</th>
                </tr>";
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila["nombre"] . "</td>
                    <td>" . $fila["Edad"] . "</td>
                    <td>" . $fila["Direccion"] . "</td>
                    <td>" . $fila["Fecha"] . "</td>
                    <td>" . $fila["VIP"] . "</td>
                    <td>" . $fila["Provincia"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
}

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda en la base de datos</title>
    <title>VIAJES VIP</title>
    <link rel="stylesheet" href="css/busque.css">
    <link rel="icon" href="/imagen/logo.webp">
</head>
<body>
    
    <form method="POST" action="">
    <h1>Búsqueda de Clientes</h1>
        <input type="text" name="criterio" placeholder="Escribe el nombre, correo o teléfono">
        <button type="submit" name="buscar" class="buscar">Buscar</button>
    </form>
</body>
</html>
