<?php
class Controller{
    public $view;
    public $model;
    function __construct(){
        $this->model;
        $this->view;
        $this->view = new View(); //CARGA LA VISTA
    }
    function loadModel($model){
        $url = 'models/' . $model . 'Model.php'; //LUGAR DEL MODELO A CARGAR
        if (file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName; //LLAMAR AL MODELO CONSTRUCTOR
        }
        
    }
}

?>