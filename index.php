<?php
    require_once("funciones/funciones.php");
?>
<html lang="es">
    <head>
        <title>MERCADO MORADO S.A</title>
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
            <p> <a class="indice" href='index.php'>Inicio</a> |
            <a class="indice" href='pages/nosotros.php'>Quieres Somos</a> |
            <a class="indice" href='pages/catalogo.php'>Catalogo</a></p>
            <img class ="market"src='img/market.png'>
        </main> 
            <?php
                fnMostrarPie();
            ?>
    </body>
</html>