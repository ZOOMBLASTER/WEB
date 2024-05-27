<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirige al usuario al formulario de login si no ha iniciado sesión
    exit(); // Termina el script después de la redirección
}

// Aquí puedes mostrar el contenido de la página de perfil
echo "Bienvenido a tu perfil";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Perfil de Usuario</title>
</head>
<body>
    <div class="profile" id="porfile">
        <form action="php/controlador.php" method="POST" class="form">
        <h2 class="title">Perfil de Usuario</h2>
        <div class="group">
        <p class="a"><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p class="b"><strong>Correo Electrónico:</strong> <?php echo $correo; ?></p>
        <div>
        <a href="editar_perfil.php" class="cta">Editar Perfil</a>
        <a href="eliminar_cuenta.php" class="cta">Eliminar Cuenta</a>
        <a href="logout.php" class="cta">Cerrar Sesión</a>
        <a href="../index.html" class="cta">Volver a la Página Principal</a>
        </div>
    </div>
</div>
</body>
</html>
