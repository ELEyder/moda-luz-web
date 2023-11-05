<?php

class RegistrarModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function registrarUsuario($nombres, $apellidos, $correo, $contrasena){
        try{
            $cn = $this->db->connect();
            $consulta = "INSERT INTO `usuario` (`IdRol`, `Nombres`, `Apellidos`, `Correo`, `Contrasena`) VALUES (?, ?, ?, ?, ?)";
            $sentencia = mysqli_prepare($cn, $consulta);
            $idRol = 2; // Reemplaza con el valor correcto
            mysqli_stmt_bind_param($sentencia, "issss", $idRol, $nombres, $apellidos, $correo, $contrasena);
            mysqli_stmt_execute($sentencia);
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}
?>