<?php
    class Registrar extends Controller{
        public function __construct() {
            parent::__construct();

        }
        public function render(){
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $contrasena = sha1($contrasena);
            $this->model->registrarUsuario($nombres, $apellidos, $correo, $contrasena);
            $this->view->render('registrar/index');
        }
    }