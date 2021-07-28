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
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $contra = $_POST['contra'];
        
        $validate = $this->model->searchEmail(['correo' => $correo]);
         if ($validate == 1) {
            $this->view->url = 'auth/register';
            $this->view->render('layout');
             echo '<script> alert("Ese correo ya existe") </script>';
         } else {
            $this->view->url = 'index/index';
            $this->view->render('layout');
            $this->model->insert(['correo' => $correo, 'nombre' => $nombre, 'contra' => $contra]);
         }
         
    }

    function userLogin(){


        $correo = $_POST['correo'];
        $contra = $_POST['contra'];

        $validate = $this->model->searchEmail(['correo' => $correo]);
        if ($validate == 1) {

            $login = $this->model->login(['correo' => $correo, 'contra' => $contra]);
            if ($login) {
                $this->view->url = 'index/index';
                $this->view->render('layout');
                echo '<script> alert("Inicio de sesion") </script>';
            } else {
                $this->view->url = 'auth/login';
                $this->view->render('layout');
                echo '<script> alert("El correo o la contraseña estan incorrectos") </script>';
            }
            

         } else {
            $this->view->url = 'auth/login';
            $this->view->render('layout');
            //  $this->model->insert(['correo' => $correo, 'nombre' => $nombre, 'contra' => $contra]);
            echo '<script> alert("El correo o la contraseña estan incorrectos") </script>';
         }

    }

}
?>