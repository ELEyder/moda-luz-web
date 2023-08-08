<?php
require_once('../funciones/mysql.php');
    $icorreo = $_POST['icorreo'];
    $icontrasena = hash("sha512",$_POST['icontrasena']);

    $consulta = "SELECT * FROM `usuarios` WHERE `correo` =  '$icorreo' AND `contrasena` = '$icontrasena'";
        $tablaSQL = fnConsultaSelect($consulta);
        if ($tablaSQL == null){
            echo '<script> alert("No se encontró la cuenta.");
            window.location.href = "formulario.php"</script>';
        } else {
            session_start();
            $row = mysqli_fetch_array($tablaSQL,MYSQLI_ASSOC);
            $_SESSION['nombre'] = $row['nombre'];
            echo '<script> alert("Inicio Exitoso");
            window.location.href = "catalogo.php"</script>';
        }
