<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--=============== REMIXICONS ===============-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="./css/normalize.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./css/inicio.css">

    <title>Ni Hyruuya Na'</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>
    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form action="php/controlador.php" method="POST" class="login__form">
            <h2 class="login__title">Registrar usuario</h2>
            
            <div class="login__group">
                <div>
                    <label for="nombre" class="login__label">Nombre de usuario</label>
                    <input type="text" placeholder="Ingresa un nombre de usuario" name="nombre" class="login__input">
                </div>
                <div>
                    <label for="email" class="login__label">Correo electronico</label>
                    <input type="email" placeholder="Ingresa tu correo" name="email" class="login__input">
                </div>
                <div>
                    <label for="password" class="login__label">Contraseña</label>
                    <input type="password" placeholder="Ingresa tu contraseña" name="password" class="login__input">
                </div>
            </div>
            <div>
                <button type="submit" class="login__button" name="registrer">Crear cuenta</button>
                <a href="index.php">Salir</a>
            </div>
        </form>
        <div id="message" class="login__message"></div>

    </div>


    <script src="js/crear.js"></script>

</body>
</html>
