<?php
    require_once("funciones/funciones.php");
    require_once("funciones/mysql.php");
?>
<html lang="es">
    <head>
        <title>LIBERTY MARKET S.A.</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/catalogo.css">
        <link rel="shortcut icon" href="icon.png">
    </head>
    <body>
        <?php
            fnMostrarCabecera("index");
        ?>
        <main class="contenido">
            <img class ="market"src='img/fondo.gif'>
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
                $img = "img/" . $imagen . ".png";
                echo '<a class="producto" href="detalles.php?id='. $id .'"><div class="producto">
                <div class="imagen">
                    <img class="producto" src="'.$img.'" alt="'.$imagen.'">
                </div>
                <div class="texto">
                    <h1 class="producto">'.$nombre.'</h1>
                    <p class="producto">S/.'.$precio.'</p>
                </div>
            </div></a>';
            }
            ?>
        </section>
            <?php
                fnMostrarPie("index");
            ?>
    </body>
</html>