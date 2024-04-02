<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "views/head.php" ?>
    <link rel="stylesheet" href="content/styles/mensaje.css">
</head>
<?php
        
        if($row = mysqli_fetch_array($this->tablaSQL ,MYSQLI_ASSOC)){
            session_start();
                $_SESSION['IdUsuario'] = $row['IdUsuario'];
                $_SESSION['IdRol'] = $row['IdRol'];
                $_SESSION['Nombres'] = $row['Nombres'];
                $_SESSION['Apellidos'] = $row['Apellidos'];
                $_SESSION['Correo'] = $row['Correo'];
                $_SESSION['Contrasena'] = $row['Contrasena'];
                $_SESSION['Telefono'] = $row['Telefono'];
                $_SESSION['imagen'] = !empty($row['imagen']) ? $row['imagen'] : null;
            echo '

<body>
    <div class="mensaje">
        <h1>Sesión Iniciada</h1>
        <button onclick=location.href="main">Aceptar</button>
    </div>
</body>
';
        }else{
            echo '
            <body>
    <div class="mensaje">
        <h1>Correo o contraseña incorrecta</h1>
        <button onclick=location.href = "form">Regresar al Inicio</button>
    </div>
</body>
';
        }
    ?>
</html>