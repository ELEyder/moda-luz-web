<?php
        if (!isset($_SESSION['nombre'])){
            echo '<script> alert("No tienes una sessión activa");
            window.location.href = "../index.php"</script>';
        }
?>

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
        <div class="confirmacion">
            <h1>¿Deseas cerrar la sesión actual?</h1>
            <a href="formulario.php"> <button id="btnCrear">Si</button> </a>
            <a href="../index.php"> <button id="btnCrear">No</button> </a>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>

</html>