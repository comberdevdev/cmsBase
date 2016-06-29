<?php
    error_reporting(0);

    session_start();
    include 'routes.php';
    require 'includes/config.php';


    $uri = urldecode($_SERVER['REQUEST_URI']);

    $uriTratada = substr($uri, 1);
    $uriExplode = explode('/', $uriTratada);
    // var_dump($uriExplode);
    if ($uriExplode[2] == 'cms') {
        $route = $routes[$uriExplode[3]];

        if(!empty($route)){
            carregaParametros($uriExplode);
            carregaRoute($route);
        } else {
            $prefixo = $prefixos[$uriExplode[3]];

            if (!empty($prefixo)) {
                $route = $prefixo[$uriExplode[4]];

                if(!empty($route)){
                    carregaParametros($uriExplode, 'S');
                    carregaRoute($route);
                }
            } else {
                $route = $routes['default'];

                carregaParametros($uriExplode);
                carregaRoute($route);                
            }
        }
    }

    function carregaRoute($route) {
        if ($route['logado'] == true) {
            if (empty($_SESSION['usuLogado'])) {
                include 'helper.php';
                redirect(caminhoSite . '/nao-logado');
            }
        } 

        if (file_exists("controller/".$route["Controller"].".php")) {
            include "controller/".$route["Controller"].".php";
            $class = $route["Controller"];
            $Controller = $route["Controller"];
            $Method = $route["Method"];
            eval("\$Controller = new \$class();");
            eval("\$Controller->\$Method();");
        }
    }

    function carregaParametros($uriExplode, $temPrefixo = 'N') {
        $tamanhoRoute = count($uriExplode);
        // echo $tamanhoRoute;
        $parametros = array();

        if ($tamanhoRoute > 3) {
            foreach ($uriExplode as $key => $value) {
                if ($temPrefixo == 'N') {
                    if ($key > 3) {
                        $parametros[] = $value;
                    }
                } else {
                    if ($key > 4) {
                        $parametros[] = $value;
                    }
                }

            }

            unset($_SESSION['parametrosGet']);
            $_SESSION['parametrosGet'] = $parametros;
        }

        if (!empty($_POST)) {
        	unset($_SESSION['parametrosPost']);
            $_SESSION['parametrosPost'] = $_POST;
        }
    }
?>    