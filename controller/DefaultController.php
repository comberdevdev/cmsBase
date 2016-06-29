<?php
require 'Controller.php';
require caminhoFisico . '/helper.php';

class DefaultController extends Controller {
	public function index() {
		$this->redirect(caminhoSite . '/usuarios/login');	
	}
}

?>