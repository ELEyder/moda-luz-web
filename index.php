<?php
    require_once("funciones/funciones.php");
?>
<html lang="es">
    <head>
        <title>LIBERTY MARKET S.A.</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="shortcut icon" href="icon.png">
    </head>
    <body>
        <?php
            fnMostrarCabecera("index");
        ?>
        <main class="contenido">
            <div>
                <h1>¡Bienvenido!</h1>
                <p>Inicia Sesion para realizar compras.</p>
            </div>
            <img class ="market"src='img/market.png'>
        </main>
            <?php
                fnMostrarPie("index");
            ?>
    </body>
</html>