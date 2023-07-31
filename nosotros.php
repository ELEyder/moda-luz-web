<?php
    require_once("funciones/funciones.php");
?>
<html>
    <head>
        <title>MARKET PERU S.A</title>
        <meta name="Author" content="Daniel Melendez Tafur">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/nosotros.css">
    </head>
    <body>
        <?php
            fnMostrarCabecera();
        ?>
    <main class="contenido-nosotros">
        <div>
            <p>¿Qui&eacute;nes Somos?</p>
        </div>
        <div>
            <img class="nosotros" src='fotos/nosotros.png'><br>
            <p class="descripcion">
                Somos una empresa dedicada a la venta de productos de
                primera necesidad, con gran experiencia de servirlo con
                calidad al 100%. Estamos comprometidos con usted que
                es nuestro cliente importante y estamos a su servicio para
                cualquier consulta de poder satisfacer sus requerimientos.
                Market Perú tiene más de 20 años sirviendo a nuestros
                clientes con el mejor equipo certificado con calidad.
            </p>
        </div>
        <a href='index.php'>Regresar</a>
    </main>
    <?php
        fnMostrarPie();
    ?>
    </body>
</html>