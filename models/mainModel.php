<?php

class MainModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function selectPrendas(){
        try{
            $cn = $this->db->connect();
            $query = "SELECT prenda.*, categoria.NombreCategoria, sexo.NombreSexo
            FROM prenda
            JOIN categoria ON prenda.IdCategoria = categoria.IdCategoria
            JOIN sexo ON prenda.IdSexo = sexo.IdSexo;";
            $stmt = $cn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (Exception $e){ 
            echo "<script>
                    alert('{$e->getMessage()}');
                    window.location.href = '{$_ENV['URL']}error';
                </script>";
            exit;
        }
    }
}