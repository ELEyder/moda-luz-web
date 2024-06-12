<?php
class View{
    function __construct(){
        //echo 'Vista Base'
    }
    function render($nombre, $data=[]){
        require 'views/' . $nombre . '.php';
    }
}
