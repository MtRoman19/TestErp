<?php

class Index extends Controller{

    function __construct(){
        parent::__construct();
          $this->view->url = 'index/index';
         $this->view->render('layout');

    }
}

?>
