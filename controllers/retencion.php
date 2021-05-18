<?php

class Retencion extends Controller{

    function __construct(){
        parent::__construct();
        //   $this->view->url = 'retencion/index';
        //  $this->view->render('layout');

    }
    function index(){
        $this->view->url = 'retencion/index';
        $this->view->render('layout');
    }
    function add(){
        $this->view->url = 'retencion/add';
        $this->view->render('layout');
    }

}
