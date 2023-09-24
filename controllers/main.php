<?php
    class Main extends Controller{
        public function __construct() {
            parent::__construct();
        }
        public function render(){
            $productos = $this->selectProductos();
            $this->view->tablaSQL = $productos;
            $this->view->render('main/index');
        }
        public function selectProductos(){
            $tablaSQL = $this->model->selectProductos();
            return $tablaSQL;
        }
    }
?>