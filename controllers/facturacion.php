<?php

class Facturacion extends Controller{

    function __construct(){
        parent::__construct();
        //   $this->view->url = 'facturacion/index';
        //  $this->view->render('layout');

    }
    function index(){
        $this->view->url = 'facturacion/index';
        $this->view->render('layout');
    }
    function add(){
        $this->view->url = 'facturacion/add';
        $this->view->render('layout');
    }

}
