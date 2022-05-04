<?php

    class Controller{

        public $load;
        public $model;

        function __construct($pageURI = null)
        {
            $this->load = new Load();
            $this->model = new Model('sqlite:../db/cocacola.db');
            $this->$pageURI();
        }

        function home()
        {
            $data = $this->model->dbGetData("fanta");
            $this->load->view('product', $data);
        }

        function viewModel()
        {
            $this->load->view('model3D');
        }

        function apiCreateTable()
        {
            $data = $this->model->dbCreateTable();
		    $this->load->view('viewMessage', $data);
        }

        function apiInsertData()
        {
            $data = $this->model->dbInsertData();
	   	    $this->load->view('viewMessage', $data);
        }

        function apiGetData()
        {
            $data = $this->model->dbGetData("coke");
		    $this->load->view('viewBrand', $data);
        }

    }

?>