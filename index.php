<?php
    require_once("funciones/funciones.php");
?>
<html lang="es">
    <head>
        <title>MARKET PERU S.A</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="shortcut icon" href="icon.png">
    </head>
    <body>
        <?php
            fnMostrarCabecera("img/logo.png");
        ?>
        <main class="contenido">
            <p> <a class="inicio" href='index.php'>Inicio</a> |
            <a class="nosotros" href='pages/nosotros.php'>Quieres Somos</a> |
            <a class="catalogo" href='pages/catalogo.php'>Catalogo</a></p>
            <img class ="market"src='img/market.png'>
        </main> 
            <?php
                fnMostrarPie();
            ?>
    </body>
</html>