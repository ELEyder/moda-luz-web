<?php
    require_once("funciones/mysql.php");
    require_once("funciones/funciones.php");
?>
<html>
    <head>
        <title>MARKET PERU S.A</title>
        <meta name="author" content="Eyder Huayta Tantavilca">
        <meta name="description" content="Mercado en linea de alimentos.">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/nosotros.css">
        <link rel="shortcut icon" href="icon.png">
    </head>
    <body>
        <?php
            fnMostrarCabecera();
        ?>
    <main class="contenido">
        <div>
            <p>CATALOGO DE PRODUCTOS</p>
        </div>
        <div>
        <?php
            $cn=fnConnect($msg);
            if(!$cn){
                fnShowMsg("Error",$msg);//mostrar mensaje de error
                return; //salir
            }else{
                $rs = mysqli_query($cn,"select * from productos");
                say("<tr>");
                $cont = 0;
                while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
                    
                    say("<td>");
                    say("<img src='img/".$row['imagen'].".png' width='100' heigth='100'><br>");
                    say("<a href='".$row["imagen"].".php'>".$row["nombre"]."</a>");
                    say("</td>");
                    $cont++;
                    if ($cont == 3){
                        say("</tr>");
                        say("<tr>");
                    }
                }
                say("</tr>");
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