<?php //Iniciar la programacion en PHP
    //Habilitar el archivo de funciones egcc.php
    require_once("egcc.php");
    //Iniciar sesion de trabajo
?>
<html>
    <head>

    <title>MARKET PERU S.A</title>
    <meta name="Author" content="Daniel Melendez Tafur">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </head>

    <body>
    <table class="tabla1" border="1px" width=900px height=100px>
        <tr>
            <td><img src="fotos/logoMarket.png"  width='100' heigth='100'></td>
            <th> MARKET PERU S.A <br>Av. Paseo de la República 3455 Lima<br>Teléfono: 4678900</th>
        </tr>
    </table>
    <table class="tabla2"  border="1px" width=900px height=30px> 
        <tr>
            <th>CATALOGO DE PRODUCTOS</th>
        </tr>
    </table>
    <?php
    $cn=fnConnect($msg);
    if(!$cn){
        fnShowMsg("Error",$msg);//mostrar mensaje de error
        return; //salir
    }else{
        $rs = mysqli_query($cn,"select * from productos where Imagen='Leche'");
        say("<table class='tabla3'  border='1px' width='900px' height='160px'>");
        say("<tr>");
        $row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
        say("<th>");
        say("<img src='fotos/".$row['imagen'].".png' width='100' heigth='100'><br>");
        say( "<a href='catalogo.php'>Regresar</a>");
        say("</th>");
        say("<td>");
        say("Precio: ".$row["precio"]."<br>");
        say("N° Pedido: 118 <br>");
        say("Unidad Medida: ".$row["descripcion"]);
        say("</td>");
        say("</tr>");
        say("</table>");
    }
    ?>
        <table class="tabla2"  border="1px" width=900px height=30px> 
        <tr>
            <th>Derechos Reservados 2019<br>
            Correo: marketperu@mkp.com.pe
</th>
        </tr>
    </table>
    </body>
</html>