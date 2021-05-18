<?php 

    class App{

        function __construct(){
           // echo "<p>Nueva app</p>";
            require_once 'controllers/bad.php';
            $url = isset($_GET['url']) ? $_GET['url']: null;
            $url = rtrim($url, '/');
            $url = explode ('/', $url);

          //  'main/hola'
            //'[0] => "main", [1] = > "hola"'
            if (empty($url[0])) {
                $archivoController = 'controllers/index.php';
                require_once $archivoController;
                $controller = new Index();
                return false;
            }
            $archivoController = 'controllers/' . $url[0] . '.php';

            if (file_exists($archivoController)) {
                require_once $archivoController;
                $controller = new $url[0];

                if (isset($url[1])) {
                    $controller->{$url[1]}();
                }
            }else {
                $controller = new Bad();
            }

        }
    }
?>