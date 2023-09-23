<?php

?>
<html lang="es">
    <head>
        <title>LIBERTY MARKET S.A.</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="content/styles/style.css">
        <link rel="stylesheet" type="text/css" href="content/styles/catalogo.css">
        <link rel="icon" href="content/img/icon.ico" type='image/x-icon'>
    </head>
    <body>
        <?php require_once 'views/header.php' ?>
        <main class="contenido">
            <img class ="market"src='content/img/fondos/fondo.gif'>
        </main>
        <section class="productos">
        <?php
            $tablaSQL = fnConsultaSelect("select * from productos");
            // Extraemos todas las filas de la tabla
            while ($row = mysqli_fetch_array($tablaSQL,MYSQLI_ASSOC)) {
                $id = $row['idProducto'];
                $nombre = $row['nombre'];
                $desc = $row['descripcion'];
                $precio = $row['precio'];
                $imagen = $row['imagen'];
                $img = "content/img/productos/abarrotes/" . $imagen . ".png";
                echo '<a class="producto" href="detalles.php?id='. $id .'">
                <div class="producto">
                    <div class="imagen">
                        <img class="producto" src="'.$img.'" alt="'.$imagen.'">
                    </div>
                <div class="texto">
                    <h1 class="producto">'.$nombre.'</h1>
                    <p class="producto">S/.'.$precio.'</p>
                </div>
                </div>
            </a>';
            }
            ?>
        </section>
        <?php require_once 'views/footer.php' ?>
    </body>
</html>