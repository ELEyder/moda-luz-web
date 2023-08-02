<?php
    require_once("../funciones/funciones.php");
?>
<html>
    <head>
    <title>MERCADO MORADO S.A</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/nosotros.css">
        <link rel="shortcut icon" href="../icon.png">
    </head>
    <body>
        <?php
            fnMostrarCabecera("../img/logo.png");
        ?>
    <main class="contenido-nosotros">
        <div class="titulo-desc">
            <p>¿Qui&eacute;nes Somos?</p>
        </div>
        <div class="desc">
            <img class="nosotros" src='../img/nosotros.png'><br>
            <p class="desc">
                Somos una empresa dedicada a la venta de productos de
                primera necesidad, con gran experiencia de servirlo con
                calidad al 100%. Estamos comprometidos con usted que
                es nuestro cliente importante y estamos a su servicio para
                cualquier consulta de poder satisfacer sus requerimientos.
                Mercado Morado tiene más de 20 años sirviendo a nuestros
                clientes con el mejor equipo certificado con calidad.
            </p>
        </div>
        <a class="regresar" href='../index.php'>Regresar</a>
    </main>
    <?php
        fnMostrarPie();
    ?>
    </body>
</html>