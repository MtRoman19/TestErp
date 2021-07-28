<?php

class Empresas extends Controller{

    function __construct(){
        parent::__construct();
        //   $this->view->url = 'empresas/index';
        //  $this->view->render('layout');

    }
    function index(){
        $this->view->url = 'empresas/index';
        $this->view->render('layout');
    }
    function add(){
        $this->view->url = 'empresas/add';
        $this->view->render('layout');
    }

}
