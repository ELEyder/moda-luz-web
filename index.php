<?php
    require_once("db/mysql.php");
    require_once("funciones/funciones.php");
?>
<html>
    <head>
        <title>MARKET PERU S.A</title>
        <meta name="Author" content="Eyder Huayta Tantavilca">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
    </head>
    <body>
            <?php
                fnMostrarCabecera();
            ?>
        <main class="contenido">
            <p><a href='index.php'>Inicio</a> | <a href='nosotros.php'>Quieres Somos</a> | <a href='catalogo.php'>Catalogo</a></p>
            <img src='fotos/market.png'>
        </main> 
            <?php
                fnMostrarPie();
            ?>
    </body>
</html>