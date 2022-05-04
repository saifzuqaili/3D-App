<?php

    class Load{

        public $load;
        public $model;

        function view($file_name, $data = null)
        {
            if(is_array($data))
            {
                extract($data);
            }
            include $file_name.".php";
        }

    }

?>