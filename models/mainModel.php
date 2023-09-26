<?php

class MainModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function selectProductos(){
        try{
            $cn = $this->db->connect();
            $tablaSQL = mysqli_query($cn,'select * from prenda');
            return $tablaSQL;
        }
        catch (Exception){ 
            echo 'ERRORRRRRRRRRRR';
        }
    }
}
?>