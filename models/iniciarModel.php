<?php

class IniciarModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function iniciarSesion($correo, $contrasena){
        try{
            $cn = $this->db->connect();
            $tablaSQL = mysqli_query($cn,'SELECT * FROM `usuario` WHERE Correo LIKE "'. $correo .'" AND Contrasena LIKE "'. $contrasena .'"');
            return $tablaSQL;
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}
?>