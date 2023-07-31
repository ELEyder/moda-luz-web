<?php
    require_once("db/mysql.php");
    require_once("funciones/funciones.php");
?>
<html>
    <head>
        <title>MARKET PERU S.A</title>
        <meta name="Author" content="Daniel Melendez Tafur">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
    </head>
    <body>
        <?php
            fnMostrarCabecera();
        ?>
            <tr>
                <td class="indice" COLSPAN="4">
                <p>CATALOGO DE PRODUCTOS</p>
                </td>
            </tr>
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
                    say("<img src='fotos/".$row['imagen'].".png' width='100' heigth='100'><br>");
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
            fnMostrarPie();
            ?>
        <a href='index.php'>Regresar</a>
    </body>
</html>