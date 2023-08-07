<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
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
                <form action="register.php" method="POST" class="register">
                    <h1>Regístrate</h1>
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Apellido" name="apellido">
                    <input type="email" placeholder="Correo electrónico" name="correo">
                    <input type="number" placeholder="DNI" name="dni">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button type="submit">Registrarse</button>
                </form>
                <form action="login.php" method="POST" class="login">
                    <h1>Inicia Sesión</h1>
                    <input type="email" placeholder="Correo electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button type="submit">Iniciar Seción</button>
                </form>
            </div>
        </div>

    </main>
    <script src="../js/script.js"></script>
</body>

</html>