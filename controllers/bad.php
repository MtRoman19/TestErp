<?php

class Bad extends Controller{

    function __construct(){
        parent::__construct();
         $this->view->url = 'error/404';
        $this->view->render('layout');

    }
}

?>