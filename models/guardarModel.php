<?php

class GuardarModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function guardarCambios($nombres, $apellidos, $correo, $telefono, $imagen = null){
        try{
            $cn = $this->db->connect();
            $id = $_SESSION['IdUsuario'];
            $query = 'UPDATE `usuario` SET Nombres = ? , Apellidos = ? , Correo = ? , Telefono = ?, Imagen = ? WHERE IdUsuario = ?';
            $stmt = $cn->prepare($query);
            $stmt->bindParam(1, $nombres, PDO::PARAM_INT);
            $stmt->bindParam(2, $apellidos, PDO::PARAM_STR_CHAR);
            $stmt->bindParam(3, $correo, PDO::PARAM_STR_CHAR);
            $stmt->bindParam(4, $telefono, PDO::PARAM_STR_CHAR);
            $stmt->bindParam(5, $imagen, PDO::PARAM_LOB);
            $stmt->bindParam(6, $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}