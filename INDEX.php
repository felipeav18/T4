<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VIAJES VIP</title>
<link rel="stylesheet" href="css/register.css">
<link rel="icon" href="/imagen/logo.webp">
</head>
<body>

<div class="form-container">
    <form action="index.php" method="post">
        <h2>Registro de Usuario</h2>
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" placeholder="Ingrese su usuario" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
        
        <button type="submit" class="btn">Registrarse</button>
    </form>

    <!-- Contenedor para mensajes PHP -->
    <div class="php-message">
        <?php
        include 'db.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars($_POST['username']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute(['username' => $username, 'password' => $password])) {
                echo "<div class='message success'>Registro exitoso. <a href='login.php'>Iniciar sesión</a></div>";
            } else {
                echo "<div class='message error'>Error al registrar. Por favor, inténtelo de nuevo.</div>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
