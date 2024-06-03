<?php
require_once('config/config.php'); // Incluye el archivo de configuración de la base de datos

// Crea una nueva instancia de conexión utilizando las constantes definidas en config.php
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifica si la conexión a la base de datos se realizó con éxito
if ($conexion->connect_error) {
    echo "Error al conectar a la base de datos: " . $conexion->connect_error;
} else {
    // Establece el conjunto de caracteres a utf8
    $conexion->set_charset("utf8");

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
}
?>
