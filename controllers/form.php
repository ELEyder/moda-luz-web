<?php
    class Form extends Controller{
        function __construct() {
            parent::__construct();
            $this->view->render('form/index');
        }
        
    }
?>