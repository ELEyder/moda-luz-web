<html lang="es">
    <head>
        <title>MODA'S LUZ</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="content/styles/style.css">
        <link rel="stylesheet" type="text/css" href="content/styles/catalogo.css">
        <link rel="icon" href="content/img/icon.ico" type='image/x-icon'>
    </head>
    <body>
        <?php require_once 'views/header.php' ?>
        <main class="contenido">
            <img class ="market"src='content/img/fondos/banner1.png'>
        </main>
        <section class="catalogo">
            <div class="contenido">
            <h1 class="nuestras-prendas">Nuestras Prendas:</h1>
            <div class="catalogo">
            <?php
            $cardsFilas = 4;
            // Extraemos todas las filas de la tabla
            while ($row = mysqli_fetch_array($this->tablaSQL ,MYSQLI_ASSOC)) {
                $id = $row['IdPrenda'];
                $nombre = $row['NombrePrenda'];
                $precio = $row['Precio'];
                $img = "content/img/catalogo/" . $id . ".webp";
                $categoria = $row['NombreCategoria'];
                $sexo = $row['NombreSexo'];
                if ($id == '1' or ((($id - 1) % $cardsFilas) == 0)){
                    echo '<div class="fila">';
                }
                echo '
                <div class="prenda">
                    
                    <div class="imagen">
                        <img class="prenda" src="'.$img.'" alt="'.$nombre.'">
                    </div>
                    <div class="etiquetas">
                        <a class="sexo">'.$sexo.'</a>
                        <a class="categoria">'.$categoria.'</a> 
                    </div>
                    <div class="texto">
                        <h1 class="prenda">'.$nombre.'</h1>
                        <p class="prenda">S/.'.$precio.'</p>
                    </div>
                    <div class="botones">
                        <a class="prenda" href="https://wa.me/51919593169?text=Buenas Noches, estoy interesado en el producto: '. $nombre .'. Solicito más información, por favor :)">
                            Agregar al Carrito
                        </a>
                        <img class="corazon" src="content/img/icons/heart.svg">
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