
<?php

    //This module fetches data for a particular brand from database
    //and returns the json string to the client for processing

    require 'model.php';

     $brand = $_POST["brand"];

     $model = new Model('sqlite:../../db/cocacola.db');
     $data = $model->dbGetData($brand);
     print_r($data);
?>