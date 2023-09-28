
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/styles/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="content/img/icon.ico" type='image/x-icon'>
    <title>Bienvenido</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="contenedor_todo">
            <div class="contenedor_textos">
                <div class="registrarse">
                    <h1>¿No tienes una cuenta?</h1>
                    <p>Crea una cuenta para poder comprar :)</p>
                    <button id="btnCrear">Crear cuenta</button>
                </div>
                <div class="iniciar_sesion">
                    <h1>¿Ya tienes una cuenta?</h1>
                    <p>Iniciar sesión para poder ver tus productos</p>
                    <button id="btnIniciar">Iniciar sesión</button>
                </div>
            </div>
            <div class="contenedor_formularios">
                <form action="registrar" method="POST" class="register">
                    <h1>Registrarse</h1>
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Apellido" name="apellido">
                    <input type="email" placeholder="Correo electrónico" name="correo">
                    <input type="number" placeholder="Numero" name="numero">
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
        </div>
    </main>
    <footer>
        <a href="<?php $_ENV['URL'] ?>main">
            <button>REGRESAR</button>
        </a>
    </footer>
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