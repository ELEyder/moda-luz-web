<?php
    class Iniciar extends Controller{
        public function __construct() {
            parent::__construct();

        }
        public function render(){
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $contrasena = sha1($contrasena);
            $correo = $_POST['correo'];
            $datosUsuario = $this->iniciarSesion($correo , $contrasena);
            $this->view->tablaSQL = $datosUsuario;
            $this->view->render('iniciar/index');
        }
        public function iniciarSesion($correo , $contrasena){
            $tablaSQL = $this->model->iniciarSesion($correo , $contrasena);
            return $tablaSQL;
        }
    }
?>