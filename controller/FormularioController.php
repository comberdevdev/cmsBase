<?php
require 'Controller.php';
require caminhoFisico . '/model/Contato.php';
require caminhoFisico . '/helper.php';

class FormularioController extends Controller {
	public function contatos() {
		try {
			$contatos = Contato::all();
			setSession("paginaAtual", "formulario/gerenciar");
			$this->renderView('formulario/contatos', $contatos);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}	

	public function excluir_contato() {
		try {
			$id = $this->requestParametrosGet[0];
			$contato = Contato::retrieveByPK($id);
			$contato->delete();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/formulario/contatos');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}
}

?>