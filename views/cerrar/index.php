<?php
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("views/head.php") ?>
    <link rel="stylesheet" href="content/styles/mensaje.css">
</head>
<body>
    <div class="mensaje">
        <h1>Haz cerrado la sesion</h1>
        <button onclick='location.href = "main"'>Regresar al Inicio</button>
    </div>
</body>
</html>