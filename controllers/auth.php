<?php

class Auth extends Controller{

    function __construct(){
        parent::__construct();
        //   $this->view->url = 'auth/index';
        //  $this->view->render('layout');
    }
    function login(){
        $this->view->url = 'auth/login';
        $this->view->render('layout');
    }
    function register(){
        $this->view->url = 'auth/register';
        $this->view->render('layout');
    }

    function newRegister(){
        $this->view->url = 'auth/register';
        $this->view->render('layout');

        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $contra = $_POST['contra'];

        echo 'hola creado';
        $this->model->insert(['correo' => $correo, 'nombre' => $nombre, 'contra' => $contra]);
    }

}
?>