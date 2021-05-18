<?php

class Bad extends Controller{

    function __construct(){
        parent::__construct();
         $this->view->url = 'error/404';
        $this->view->render('error/404',0);
     //   echo "<p>No existe controlador</p>";
    }
}

?>