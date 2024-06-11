<?php
    class Main extends Controller{
        public function __construct() {
            parent::__construct();
        }
        public function render(){
            $prendas = $this->selectPrendas();
            $this->view->data = $prendas;
            $this->view->render('main/index');
        }
        public function selectPrendas(){
            $prendas = $this->model->selectPrendas();
            return $prendas;
        }
    }