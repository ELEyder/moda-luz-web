<?php

class IniciarModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function iniciarSesion($correo, $contrasena){
        try{
            $cn = $this->db->connect();
            $query = 'SELECT * FROM `usuario` WHERE Correo LIKE "'. $correo .'" AND Contrasena LIKE "'. $contrasena .'"';
            $stmt = $cn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}
?>