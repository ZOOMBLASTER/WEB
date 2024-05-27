<?php
session_start();
$conexion = new mysqli("localhost", "root", "", "ni_hyruuya_na", 33065);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

if (isset($_POST['btninicio'])) {
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $conexion->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE Correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['Contraseña'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: ../perfil.php"); // Redirige al perfil una vez que el usuario ha iniciado sesión correctamente
            exit(); // Termina el script después de la redirección
        } else {
            echo '<script>alert("Contraseña incorrecta");</script>';
        }
    } else {
        echo '<script>alert("Correo no registrado");</script>';
    }

}

?>
