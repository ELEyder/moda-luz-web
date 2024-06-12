<?php
    class Iniciar extends Controller{
        public function __construct() {
            parent::__construct();

        }
        public function render(){
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $contrasena = sha1($contrasena);
            $datosUsuario = $this->iniciarSesion($correo , $contrasena);
            $this->view->render('iniciar/index', $datosUsuario);
        }
        public function iniciarSesion($correo , $contrasena){
            $tablaSQL = $this->model->iniciarSesion($correo , $contrasena);
            return $tablaSQL;
        }
    }