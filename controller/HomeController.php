<?php
require 'Controller.php';
require caminhoFisico . '/model/Visita.php';
require caminhoFisico . '/helper.php';

class HomeController extends Controller {
	public function index() {
		try {
			$visitas = Visitas::all();

			$_SESSION['paginaAtual'] = 'home';
			$this->renderView('home/home', $visitas);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}
}

?>