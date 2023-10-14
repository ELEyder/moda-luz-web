<?php

class MainModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function selectPrendas(){
        try{
            $cn = $this->db->connect();
            $tablaSQL = mysqli_query($cn,'SELECT prenda.*, categoria.NombreCategoria, sexo.NombreSexo
            FROM prenda
            JOIN categoria ON prenda.IdCategoria = categoria.IdCategoria
            JOIN sexo ON prenda.IdSexo = sexo.IdSexo;');
            return $tablaSQL;
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}
?>