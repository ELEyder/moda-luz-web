<?php //Iniciar la programacion en PHP
    //Habilitar el archivo de funciones egcc.php
    require_once("../funciones/mysql.php");
    require_once("../funciones/funciones.php");
    //Iniciar sesion de trabajo
?>
<html>
    <head>
        <title>DETALLES DEL PRODUCTO</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/detalles.css">
        <link rel="shortcut icon" href="../icon.png">
    </head>

    <body>
    <?php
        //HEAD
        fnMostrarCabecera("");
    ?>
        <main class="contenido">
        <?php
        //MAIN
        $cn = fnConnect($msg);
        if(!$cn){
            fnShowMsg("Error",$msg);//mostrar mensaje de error
            return; //salir
        }else{
            $tablaSQL = fnConsultaSelect("select * from productos where idProducto =". $_GET['id']);
            $row = mysqli_fetch_array($tablaSQL,MYSQLI_ASSOC);
            $id = $row['idProducto'];
            $nombre = $row['nombre'];
            $desc = $row['descripcion'];
            $precio = $row['precio'];
            $imagen = $row['imagen'];
            $img = "../img/" . $imagen . ".png";
            echo '<div class="producto">
                <div class="imagen">
                    <img class="producto" src="'.$img.'" alt="'.$imagen.'">
                </div>
                <div class="texto">
                    <h1 class="producto">'.$nombre.'</h1>
                    <p class="producto">Unidad: '.$desc.'</p>
                    <p class="producto">Precio: S/.'.$precio.'</p>
                    <a class="boton"href="../index.php">Agregar al carrito</a>
                </div>
            </div>';
        }
    ?>
    <a class="regresar" href="catalogo.php">Regresar al Catálogo</a>
        </main>
            <?php
                fnMostrarPie();
            ?>
</th>
        </tr>
    </table>
    </body>
</html>