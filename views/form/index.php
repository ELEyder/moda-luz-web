
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/styles/form.css">
    <link rel="icon" href="content/img/icon.ico" type='image/x-icon'>
    <title>Bienvenido</title>
</head>

<body>
    <header class="form">
        <a class="regresar" href="<?php $_ENV['URL'] ?>main">Regresar</a>
    </header>

    <main>
        <div class="todo">
            <div class="textos">
                <div class="texto">
                    <h1>¿No tienes una cuenta?</h1>
                    <h2>Crea una cuenta para poder comprar</h2>
                    <a class="boton" href="#" id="btnCrear">Crear cuenta</a>
                </div>
                <div class="texto">
                    <h1>¿Ya tienes una cuenta?</h1>
                    <h2>Iniciar sesión para poder ver tus productos</h2>
                    <a class="boton" href="#" id="btnIniciar">Iniciar sesión</a>
                </div>
            </div>
            <form action="registrar" method="POST" class="register">
                <h1>Registrarse</h1>
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="text" placeholder="Apellido" name="apellido">
                <input type="email" placeholder="Correo electrónico" name="correo">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button type="submit">Registrarse</button>
            </form>
            <form action="form/iniciar" method="POST" class="login">
                <h1>Inicia Sesión</h1>
                <input type="email" placeholder="Correo electrónico" name="icorreo" required>
                <input type="password" placeholder="Contraseña" name="icontrasena" required>
                <button type="submit">Iniciar Seción</button>
            </form>
        </div>
    </main>
    <script src="scripts/script.js"></script>
    <?php
    	session_start();
        if (isset($_SESSION['nombre'])){
            echo '<script>alert("Cerrando ventana.");</script>';
            session_destroy();
        }
    ?>
</body>

</html>