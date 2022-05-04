<?php

    //This controller is used to load and serve a model to the client
    //The controller is created seperately because certain parameters along
    //submitted in get request needs to be processed and served to model for data fetching
    //which were not facilitated in controller class.
    require '../model/model.php';
    require '../view/load.php';

     $brand = $_GET["brand"];
     $model = new Model('sqlite:../../db/cocacola.db');
    
     $data = $model->dbGetData($brand);
     $tmp = new load();

     $tmp->view("model3D", $data);
?>