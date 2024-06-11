<?php
class View{
    public $data;
    function __construct(){
        //echo 'Vista Base'
    }
    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}
