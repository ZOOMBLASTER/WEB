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
$stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    session_destroy();
    header("Location: ../index.html");
} else {
    echo "Error eliminando la cuenta";
}

$stmt->close();
$conexion->close();
?>
