<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Harley.php';
	require caminhoFisico . '/helper.php';

	class HarleyController extends Controller {
		public function gerenciar_dados() {
			try {
				$harley = Harley::retrieveByPK(1);

				setSession('paginaAtual', 'harley/harley');

				// $this->redirect(caminhoSite . '/harley-davidson-curitiba/arquivo', parametro);
				$this->renderView('harley-davidson-curitiba/gerenciar', $harley);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function atualizar_dados() {
			try {
				$harley = Harley::retrieveByPK(1);

				$handle = new upload($_FILES['banner']);
	            if ($handle->uploaded) {
	                $handle->image_resize         = false;
	                $handle->process(caminhoFisico . '/uploads/');
	                if ($handle->processed) {
	                    $handle->clean();
	                    $harley->banner = $handle->file_dst_name;
	                } else {
	                    echo 'error : ' . $handle->error;
	                }
	            }

				$harley->titulo_introducao = $this->requestParametrosPost['titulo_introducao'];
				$harley->texto_primario = $this->requestParametrosPost['texto_primario'];
				$harley->texto_secundario = $this->requestParametrosPost['texto_secundario'];
				$harley->tour_texto = $this->requestParametrosPost['tour_texto'];
				$harley->tour_link = $this->requestParametrosPost['tour_link'];
				$harley->titulo = $this->requestParametrosPost['titulo'];
				$harley->conteudo = $this->requestParametrosPost['conteudo'];

				$handle = new upload($_FILES['img_fundo']);
	            if ($handle->uploaded) {
	                $handle->image_resize         = false;
	                $handle->process(caminhoFisico . '/uploads/');
	                if ($handle->processed) {
	                    $handle->clean();
	                    $harley->img_fundo = $handle->file_dst_name;
	                } else {
	                    echo 'error : ' . $handle->error;
	                }
	            }

	            $handle = new upload($_FILES['img_logo']);
	            if ($handle->uploaded) {
	                $handle->image_resize         = false;
	                $handle->process(caminhoFisico . '/uploads/');
	                if ($handle->processed) {
	                    $handle->clean();
	                    $harley->img_logo = $handle->file_dst_name;
	                } else {
	                    echo 'error : ' . $handle->error;
	                }
	            }

				$harley->save();

				setSession('sucesso', 'S');
				// $this->redirect(caminhoSite . '/harley-davidson-curitiba/url');
				$this->redirect(caminhoSite . '/harley-davidson-curitiba/gerenciar-dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
	}
?>