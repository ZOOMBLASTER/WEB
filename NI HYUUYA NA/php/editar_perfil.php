<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../index.html");
    exit();
}

$conexion = new mysqli("localhost", "root", "", "ni_hyruuya_na", 33065);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id = $_SESSION['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoNombre = $_POST["nombre"];
    $nuevoCorreo = $_POST["email"];

    $stmt = $conexion->prepare("UPDATE usuarios SET Nombre = ?, Correo = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nuevoNombre, $nuevoCorreo, $id);

    if ($stmt->execute()) {
        $_SESSION['nombre'] = $nuevoNombre;
        $_SESSION['email'] = $nuevoCorreo;
        header("Location: perfil.php");
    } else {
        echo "Error actualizando el perfil";
    }

    $stmt->close();
}

$stmt = $conexion->prepare("SELECT Nombre, Correo FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($nombre, $correo);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inicio.css">
    <title>Editar Perfil</title>
</head>
<body>
    <div class="profile-edit">
        <h2>Editar Perfil</h2>
        <form method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($correo); ?>">
            <button type="submit">Guardar Cambios</button>
        </form>
        <a href="perfil.php">Cancelar</a>
    </div>
</body>
</html>

<?php
$conexion->close();
?>
