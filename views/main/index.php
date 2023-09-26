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
            <img class ="market"src='content/img/fondos/banner1.gif'>
        </main>
        <section class="catalogo">
            <div class="contenido">
            <h1 class="mas-vendidos">Prendas más vendidas:</h1>
            <div class="catalogo">
            <?php
            $cardsFilas = 4;
            // Extraemos todas las filas de la tabla
            while ($row = mysqli_fetch_array($this->tablaSQL ,MYSQLI_ASSOC)) {
                $id = $row['idProducto'];
                $nombre = $row['nombre'];
                $desc = $row['descripcion'];
                $precio = $row['precio'];
                $img = "content/img/catalogo/" . $id . ".webp";
                if ($id == '1' or ((($id - 1) % $cardsFilas) == 0)){
                    echo '<div class="fila">';
                }
                echo '
                <div class="prenda">
                    <a class="prenda" href="detalles.php?id='. $id .'">
                    <div class="imagen">
                        <img class="prenda" src="'.$img.'" alt="'.$nombre.'">
                    </div>
                    <div class="texto">
                        <h1 class="prenda">'.$nombre.'</h1>
                        <p class="prenda">S/.'.$precio.'</p>
                    </div>
                    </a>
                </div>
            ';
            if ($id % $cardsFilas == 0){
                echo '</div>';
            }
            }
            ?>
            </div>
            </div>
        </section>
        <?php require_once 'views/footer.php' ?>
    </body>
</html>