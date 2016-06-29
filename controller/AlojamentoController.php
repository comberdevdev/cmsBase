<?php
require 'Controller.php';
require caminhoFisico . '/model/Alojamento.php';
require caminhoFisico . '/helper.php';

class AlojamentoController extends Controller {
	public function gerenciar() {
		try {
			$alojamentos = Alojamentos::all();

			$_SESSION['paginaAtual'] = 'meus-alojamentos/alojamentos';
			$this->renderView('meus-alojamentos/gerenciar', $alojamentos);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function novo_alojamento() {
		try {
			$_SESSION['paginaAtual'] = 'meus-alojamentos/alojamentos';
			$this->renderView('meus-alojamentos/adicionar');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function editar_alojamento() {
		try {
			$id = $this->requestParametrosGet[0];
			$alojamento = Alojamentos::retrieveByPK($id);

			// foreach (json_decode($alojamento->fotos) as $value) {
			// 	echo $value;
			// }
			$_SESSION['paginaAtual'] = 'meus-alojamentos/alojamentos';
			$this->renderView('meus-alojamentos/editar', $alojamento);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salvar_alojamento() {
		try {
			$alojamento = new Alojamentos();
			$alojamento->titulo = $this->requestParametrosPost['titulo'];
			$alojamento->breve_descricao = $this->requestParametrosPost['breve_descricao'];
			$alojamento->descricao_completa = $this->requestParametrosPost['descricao_completa'];
			$alojamento->slug = $this->requestParametrosPost['slug'];

			// var_dump($_FILES);
			if (!empty($_FILES['fotos']['name'])) {
				$file_ary = reArrayFiles($_FILES['fotos']);

				foreach ($file_ary as $file) {
					$handle = new upload($file);
					if ($handle->uploaded) {
						$data_hora = date("YmdHis") . '_' . $handle->file_src_name_body;
						$handle->file_new_name_body   = $data_hora . '_250x250';
						$handle->image_resize         = true;
						$handle->image_ratio_crop     = true;
						$handle->image_y              = 250;
						$handle->image_x              = 250;
						$handle->process(caminhoFisico . '/uploads/');
						$handle->file_new_name_body   = $data_hora;
						$handle->image_resize         = false;
						// $handle->image_ratio_x        = true;
						// $handle->image_y              = 250;
						$handle->process(caminhoFisico . '/uploads/');
						if ($handle->processed) {
							$handle->clean();
							$fotos[] = $handle->file_dst_name;
						} else {
							echo 'error : ' . $handle->error;
						}
					}
				}

				$fotos_json = json_encode($fotos);
				$alojamento->fotos = $fotos_json;
			}

			$alojamento->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/meus-alojamentos/gerenciar');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salvar_edicao_alojamento() {
		try {
			$id = $this->requestParametrosPost['id'];
			$alojamento = Alojamentos::retrieveByPK($id);
			$alojamento->titulo = $this->requestParametrosPost['titulo'];
			$alojamento->breve_descricao = $this->requestParametrosPost['breve_descricao'];
			$alojamento->descricao_completa = $this->requestParametrosPost['descricao_completa'];
			$alojamento->slug = $this->requestParametrosPost['slug'];

			if (!empty($_FILES['fotos']['name'])) {
				$file_ary = reArrayFiles($_FILES['fotos']);

				foreach ($file_ary as $file) {
					$handle = new upload($file);
					if ($handle->uploaded) {
						$data_hora = date("YmdHis") . '_' . $handle->file_src_name_body;
						$handle->file_new_name_body   = $data_hora . '_250x250';
						$handle->image_resize         = true;
						$handle->image_ratio_crop     = true;
						$handle->image_y              = 250;
						$handle->image_x              = 250;
						$handle->process(caminhoFisico . '/uploads/');
						$handle->file_new_name_body   = $data_hora;
						$handle->image_resize         = false;
						// $handle->image_ratio_x        = true;
						// $handle->image_y              = 250;
						$handle->process(caminhoFisico . '/uploads/');
						if ($handle->processed) {
							$handle->clean();
							$fotos[] = $handle->file_dst_name;
						} else {
							echo 'error : ' . $handle->error;
						}
					}
				}

				$testeJson = json_encode($fotos);
				if ($testeJson != 'null') {
					if ($alojamento->fotos != '') {
						$fotos_atuais = json_decode($alojamento->fotos);
						foreach ($fotos_atuais as $value) {
							$fotos[] = $value;
						}
						$fotos_json = json_encode($fotos);
					} else {
						$fotos_json = json_encode($fotos);
					}
					$alojamento->fotos = $fotos_json;
				}
			}

			$alojamento->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/meus-alojamentos/editar-alojamento/' . $id);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function deleta_alojamento() {
		try {
			$id = $this->requestParametrosGet[0];
			$alojamento = Alojamentos::retrieveByPK($id);
			$alojamento->delete();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/meus-alojamentos/gerenciar');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function remover_fotos() {
		$id = $this->requestParametrosGet[0];
		$alojamento = Alojamentos::retrieveByPK($id);
		$alojamento->fotos = '';
		$alojamento->save();

		echo 'Removido';
	}

	public function remove_foto() {
		$id = $this->requestParametrosGet[0];
		$nome_imagem = $this->requestParametrosGet[1];
		$alojamento = Alojamentos::retrieveByPK($id);
		$fotos = json_decode($alojamento->fotos);
		$key = array_search($nome_imagem, $fotos);
		unset($fotos[$key]);
		$fotos = array_values($fotos);
		$alojamento->fotos = json_encode($fotos);
		$alojamento->save();

		echo 'Removido';
	}
}

?>