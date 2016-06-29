<?php
require 'Controller.php';
require caminhoFisico . '/model/Chacara.php';
require caminhoFisico . '/helper.php';

class AChacaraController extends Controller {
	public function dados() {
		try {
			$chacara = Chacara::retrieveByPK(1);
			$chacara_itens = Chacara_Itens::all();
			$parametros = array('chacara' => $chacara, 'chacara_itens' => $chacara_itens);
			setSession("paginaAtual", "chacara/chacara");
			$this->renderView('chacara/gerenciar', $parametros);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}	

	public function dados_item() {
		$id = $this->requestParametrosGet[0];
		$chacara_item = Chacara_Itens::retrieveByPK($id);

		echo json_encode($chacara_item);
	}

	public function salva_introducao() {
		try {
			$chacara = Chacara::retrieveByPK(1);
			$chacara->introducao = $this->requestParametrosPost['introducao'];
			$chacara->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/achacara/dados');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salva_dados() {
		try {
			$chacara = Chacara::retrieveByPK(1);
			$chacara->titulo = $this->requestParametrosPost['titulo'];
			$chacara->subtitulo = $this->requestParametrosPost['subtitulo'];
			$chacara->texto1 = $this->requestParametrosPost['texto1'];
			$chacara->texto2 = $this->requestParametrosPost['texto2'];
			$chacara->cor_fundo = $this->requestParametrosPost['cor_fundo'];
			$chacara->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/achacara/dados');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salva_item() {
		try {
			if (!empty($this->requestParametrosPost['id'])) {
				$id = $this->requestParametrosPost['id'];
				$chacara_item = Chacara_Itens::retrieveByPK($id);
			} else {
				$chacara_item = new Chacara_Itens();
			}

			$chacara_item->titulo = $this->requestParametrosPost['titulo'];
			$chacara_item->valor = $this->requestParametrosPost['valor'];

			$handle = new upload($_FILES['icone']);
			if ($handle->uploaded) {
				$handle->file_new_name_body   = date("YmdHis");
				$handle->image_resize         = false;
				// $handle->image_x              = 100;
				// $handle->image_ratio_y        = true;
				$handle->process(caminhoFisico . '/uploads/');
				if ($handle->processed) {
					$handle->clean();
					$chacara_item->icone = $handle->file_dst_name;
				} else {
					echo 'error : ' . $handle->error;
				}
			}

			$chacara_item->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/achacara/dados');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function deleta_item() {
		try {
			$id = $this->requestParametrosGet[0];
			$chacara_item = Chacara_Itens::retrieveByPK($id);
			$chacara_item->delete();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/achacara/dados');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}	
}

?>