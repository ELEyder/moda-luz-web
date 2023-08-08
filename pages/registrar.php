<?php
require_once('../funciones/mysql.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $contrasena = hash("sha512",$_POST['contrasena']);

    $consulta = "INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `correo`, `numero`, `contrasena`) VALUES (NULL, '". $nombre ."','". $apellido ."','". $correo ."','". $numero ."','". $contrasena ."')";
    try {
        fnConsultaInsert($consulta);
    }
    catch(Exception){
        echo '<script> alert("No se pudo realizar el registro");
        window.location.href = "formulario.php"</script>';
    }
    echo '<script> alert("Registro exitoso.");
    window.location.href = "formulario.php"</script>';
    
?>