<?php

class RegistrarModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function registrarUsuario($nombres, $apellidos, $correo, $contrasena){
        try{
            $cn = $this->db->connect();
            $query = "INSERT INTO `usuario` (`IdRol`, `Nombres`, `Apellidos`, `Correo`, `Contrasena`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $cn->prepare($query);
            $idRol = 2;
            $stmt->bindParam(1, $idRol, PDO::PARAM_INT);
            $stmt->bindParam(2, $nombres, PDO::PARAM_STR);
            $stmt->bindParam(3, $apellidos, PDO::PARAM_STR);
            $stmt->bindParam(4, $correo, PDO::PARAM_STR);
            $stmt->bindParam(5, $contrasena, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}
?>