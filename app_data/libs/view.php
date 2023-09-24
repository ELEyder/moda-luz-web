<?php
class View{
    public $tablaSQL;
    function __construct(){
        //echo 'Vista Base'
    }
    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}

?>