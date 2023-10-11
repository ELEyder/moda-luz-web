<?php
    class Main extends Controller{
        public function __construct() {
            parent::__construct();
        }
        public function render(){
            $productos = $this->selectPrendas();
            $this->view->tablaSQL = $productos;
            $this->view->render('main/index');
        }
        public function selectPrendas(){
            $tablaSQL = $this->model->selectPrendas();
            return $tablaSQL;
        }
    }
?>