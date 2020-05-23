<?php
    require_once "php/model.php";
    require_once "php/view.php";

    class controller{
        private $model;
        private $view;

        public function __construct(){
            $this->model = new model();
            $this->view = new view();
        }
		public function index(){
    		$this->view->displayIndex();
		}
    }