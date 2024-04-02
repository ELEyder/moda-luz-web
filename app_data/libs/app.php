<?php
Class App{
    public function __construct(){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/',$url);

        if ($url[0] == ''){
            $url[0] = 'main';
        }

        $archivoController = 'controllers/' . $url[0] . '.php';
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0]; //CREAR OBJETO DEL CONTROLADOR TRAIDO
            $controller->loadModel($url[0]); //LLAMAR SU RESPECTIVO MODELO
            $controller->render(); //LLAMAR SU RESPECTIVA VISTA
            if (isset($url[1])){ //SI EXISTE OTRA URL /
                $controller->{$url[1]}(); //ES UN METODO Y SE LE TRAE
            }
        }
        else{
            require_once 'controllers/errores.php';
            $controller = new Errores();
            $controller->render(); //LLAMAR SU RESPECTIVA VISTA
        }
    }
}

?>