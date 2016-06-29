<?php
session_start();
require caminhoFisico . '/vendor/autoload.php';
date_default_timezone_set('America/Sao_Paulo');

class Controller
{
    protected $requestParametrosGet = null;
    protected $requestParametrosPost = null;

    public function __construct() {
        if (!empty($_SESSION['parametrosGet'])) {
            $this->requestParametrosGet = $_SESSION['parametrosGet'];
        }
        if (!empty($_SESSION['parametrosPost'])) {
            $this->requestParametrosPost = $_SESSION['parametrosPost'];
        }
    }

    protected function renderView($view, $parametros = null) {
        unset($_SESSION['parametrosView']);
        if ($parametros != null) {
            $_SESSION['parametrosView'] = $parametros;
        }

		require caminhoFisico . '/includes/head.php';
		require caminhoFisico . '/includes/header.php';
        require caminhoFisico . '/view/parts/message.php';
        require caminhoFisico . '/view/parts/confirm.php';
        // require caminhoFisico . '/helper.php';
	    require caminhoFisico . '/view/' . $view . '.php';
	    require caminhoFisico . '/includes/footer.php';
    }

    protected function renderViewUnique($view, $parametros = null) {
        unset($_SESSION['parametrosView']);
        if ($parametros != null) {
            $_SESSION['parametrosView'] = $parametros;
        }

        require caminhoFisico . '/view/' . $view . '.php';
    }

    protected function redirect($url) {
        echo '<script language="JavaScript"> ';
        echo 'window.location="' . $url . '";';
        echo '</script>';
    }
}

?>