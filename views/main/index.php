<html lang="es">
    <head>
        <?php require_once("views/head.php") ?>
        <link rel="stylesheet" href="content/styles/catalogo.css">
    </head>
    <body>
        <?php require_once 'views/header.php' ?>
        <main class="contenido">
            <img class ="market"src='content/img/fondos/banner1.png'>
        </main>
        <section class="catalogo">
            <div class="contenido">
                <div class="catalogo">
                <h1 class="nuestras-prendas">Nuestras Prendas:</h1>
            <?php
            foreach ($data as $row) {
                $id = $row['IdPrenda'];
                $nombre = $row['NombrePrenda'];
                $precio = $row['Precio'];
                $img = "content/img/catalogo/" . $id . ".webp";
                $categoria = $row['NombreCategoria'];
                $sexo = $row['NombreSexo'];
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
            }
            ?>
            </div>
            </div>
            </div>
        </section>
        <?php require_once 'views/footer.php' ?>
    </body>
</html>