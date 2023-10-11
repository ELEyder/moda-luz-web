<?php

class MainModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function selectPrendas(){
        try{
            $cn = $this->db->connect();
            $tablaSQL = mysqli_query($cn,'SELECT Prenda.*, Categoria.NombreCategoria, Sexo.NombreSexo
            FROM Prenda
            JOIN Categoria ON Prenda.IDCategoria = Categoria.IDCategoria
            JOIN Sexo ON Prenda.IDSexo = Sexo.IDSexo;');
            return $tablaSQL;
        }
        catch (Exception $e){ 
            echo 'ERROR en : ' . $e;
        }
    }
}
?>