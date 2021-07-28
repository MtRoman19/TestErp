<?php

class Profile extends Controller{

    function __construct(){
        parent::__construct();
         $this->view->url = 'profile/index';
        $this->view->render('layout');

    }
}

?>