<?php
require_once('php/conexion.php'); // Incluye el archivo de conexión a la base de datos

// Consulta para obtener información de los peces
$sql = "SELECT * FROM informacion_peces";
$resultado = $conexion->query($sql);

// Verifica si la consulta fue exitosa
if ($resultado) {
    $peces = array();
    while ($row = $resultado->fetch_assoc()) {
        $peces[] = $row;
    }

    // Devuelve los datos de los peces en formato JSON
    echo json_encode($peces);
} else {
    // Si la consulta falla, devuelve un mensaje de error
    $error = "Error al obtener los datos de los peces: " . $conexion->error;
    echo json_encode(array("error" => $error));
}
?>

