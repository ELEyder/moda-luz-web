<?php

class FormModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function iniciar(){
        try{
            $cn = $this->db->connect();
            $icorreo = $_POST['icorreo'];
            $icontrasena = hash("sha512",$_POST['icontrasena']);
        
            $consulta = "SELECT * FROM `usuarios` WHERE `correo` =  '$icorreo' AND `contrasena` = '$icontrasena'";
            $tablaSQL = mysqli_query($cn,$consulta);
            if ($tablaSQL == null){
                echo '<script> alert("No se encontró la cuenta.")';
            } else {
                $row = mysqli_fetch_array($tablaSQL,MYSQLI_ASSOC);
                $_SESSION['nombre'] = $row['nombre'];
                echo '<script> alert("Inicio Exitoso")';
            }
        }
        catch (Exception){ 
            echo 'ERRORRRRRRRRRRR';
        }
    }
    public function a(){
        try {
            $cn = $this->db->connect();
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $numero = $_POST['numero'];
            $contrasena = hash("sha512",$_POST['contrasena']);

            $consulta = "INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `correo`, `numero`, `contrasena`) VALUES (NULL, '". $nombre ."','". $apellido ."','". $correo ."','". $numero ."','". $contrasena ."')";
                
            mysqli_query($cn,$consulta);
        }
        catch(Exception){
                    echo '<script> alert("No se pudo realizar el registro");
                    window.location.href = "form"</script>';
        }
                echo '<script> alert("Registro exitoso.");
                window.location.href = "form"</script>';
    }
}
?>