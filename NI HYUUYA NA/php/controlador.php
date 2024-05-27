<?php

// Mostrar todos los errores (solo para depuración; eliminar en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica si el formulario fue enviado
if (isset($_POST["registrer"])) {
    var_dump($_POST); // Para verificar los datos del formulario

    // Verifica si algún campo está vacío
    if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        echo '<div class="alerta">Algún campo está vacío</div>';
    } else {
        // Establece las variables con los valores del formulario
        $Nombre = $_POST["nombre"];
        $Correo = $_POST["email"];
        $Contraseña = $_POST["password"];

        // Hashea la contraseña
        $hashed_password = password_hash($Contraseña, PASSWORD_DEFAULT);

        // Conexión a la base de datos (sin contraseña)
        $conexion = new mysqli("localhost", "root", "", "ni_hyruuya_na", 33065);

        // Verifica si la conexión fue exitosa
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        } else {
            echo "Conexión exitosa a la base de datos.<br>";
        }

        // Prepara la consulta SQL (evita inyección SQL utilizando consultas preparadas)
        $stmt = $conexion->prepare("INSERT INTO usuarios (Nombre, Correo, Contraseña) VALUES (?, ?, ?)");
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conexion->error);
        }
        $stmt->bind_param("sss", $Nombre, $Correo, $hashed_password);
        
        // Ejecuta la consulta
        if ($stmt->execute()) {
            echo '<div class="success">Registro exitoso</div>';
            header("Location: ../index.php"); // Redirige al inicio de sesión después del registro
        } else {
            echo '<div class="fail">Error en el registro: ' . $stmt->error . '</div>';
        }
        
        // Cierra la conexión y libera los recursos
        $stmt->close();
        $conexion->close();
    }
}
?>
