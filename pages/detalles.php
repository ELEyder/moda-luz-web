<?php //Iniciar la programacion en PHP
    //Habilitar el archivo de funciones egcc.php
    require_once("../funciones/mysql.php");
    require_once("../funciones/funciones.php");
    //Iniciar sesion de trabajo
?>
<html>
    <head>

    <title>MERCADO MORADO S.A</title>
    <meta name="author" content="Eyder Huayta Tantavilca">
    <meta name="description" content="Mercado en linea de alimentos.">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/detalles.css">
    <link rel="shortcut icon" href="../icon.png">

    </head>

    <body>
    <?php
        //HEAD
        fnMostrarCabecera("../img/logo.png");
    ?>
    <main>
        <?php
        //MAIN
        $cn = fnConnect($msg);
        if(!$cn){
        fnShowMsg("Error",$msg);//mostrar mensaje de error
        return; //salir
    }else{
        $consulta = "select * from productos where idProducto=" . $_GET['id'];
        $rs = mysqli_query($cn,$consulta);
        echo("<table class='tabla3'  border='1px' width='900px' height='160px'>");
        echo("<tr>");
        $row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
        echo("<th>");
        echo("<img src='../img/".$row['imagen'].".png' width='100' heigth='100'><br>");
        echo( "<a href='catalogo.php'>Regresar</a>");
        echo("</th>");
        echo("<td>");
        echo("Precio: ".$row["precio"]."<br>");
        echo("N° Pedido: 115 <br>");
        echo("Unidad Medida: ".$row["descripcion"]);
        echo("</td>");
        echo("</tr>");
        echo("</table>");
    }
    ?>
        <table class="tabla2"  border="1px" width=900px height=30px> 
        <tr>
        </main>
            <th>Derechos Reservados 2019<br>
            Correo: marketperu@mkp.com.pe
</th>
        </tr>
    </table>
    </body>
</html>