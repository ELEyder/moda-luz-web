<?php
    require_once("funciones/mysql.php");
    require_once("funciones/funciones.php");
?>
<html>
    <head>
        <title>MARKET PERU S.A</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" href="styles/catalogo.css">
        <link rel="shortcut icon" href="icon.png">
    </head>
    <body>
        <?php
            fnMostrarCabecera();
        ?>
    <main class="contenido">
        <div class="subtitulo">
            <p>CATALOGO DE PRODUCTOS</p>
        </div>
        <div class="productos">
        <?php
            $tablaSQL = fnSelectProductos();
            // Extraemos todas las filas de la tabla
            while ($row = mysqli_fetch_array($tablaSQL,MYSQLI_ASSOC)) {
                $nombre = $row['nombre'];
                $desc = $row['descripcion'];
                $precio = $row['precio'];
                $imagen = $row['imagen'];
                $img = "img/" . $imagen . ".png";
                echo '<div class="producto">
                <img class="producto" src="'.$img.'" alt="'.$imagen.'">
                <h1>'.$nombre.'</h1>
                <p>Unidad: '.$desc.'</p>
                <p>'.$precio.'</p>
            </div>';
            }
            ?>
        </div>
    </main>
            <?php
            fnMostrarPie();
            ?>
        <a href='index.php'>Regresar</a>
    </body>
</html>