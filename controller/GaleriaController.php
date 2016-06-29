<?php
require 'Controller.php';
require caminhoFisico . '/model/Galeria.php';
require caminhoFisico . '/helper.php';

class GaleriaController extends Controller {
	public function gerenciar_pagina() {
		try {
			$pagina = Galeria_Pagina::retrieveByPK(1);

			$_SESSION['paginaAtual'] = 'galeria-imagens/gerenciar';
			$this->renderView('galeria-imagens/gerGaleria', $pagina);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salva_pagina() {
		try {
			$pagina = Galeria_Pagina::retrieveByPK(1);

			$handle = new upload($_FILES['imagem']);
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
					$pagina->banner = $handle->file_dst_name;
				} else {
					echo 'error : ' . $handle->error;
				}
			}
			$pagina->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/galeria/gerenciar-pagina');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function add_categoria() {
		try {
			$categorias = Galeria_Categoria::all();

			$_SESSION['paginaAtual'] = 'galeria-imagens/gerenciar';
			$this->renderView('galeria-imagens/adicionar', $categorias);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salvar_categoria() {
		try {
			$categ = new Galeria_Categoria();
			$categ->titulo = $this->requestParametrosPost['titulo'];
			$categ->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/galeria/categorias');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function excluir_categoria() {
		try {
			$id = $this->requestParametrosGet[0];
			$categ = Galeria_Categoria::retrieveByPK($id);
			$categ->delete();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/galeria/categorias');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function adicionar_fotos() {
		try {
			$categorias = Galeria_Categoria::all();

			$_SESSION['paginaAtual'] = 'galeria-imagens/gerenciar';
			$this->renderView('galeria-imagens/galeria', $categorias);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salvar_fotos() {
		try {
			// var_dump($this->requestParametrosPost);
			// var_dump($_FILES['fotos']);

			if (!empty($_FILES['fotos'])) {
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
							$galeria = new Galeria_Fotos();
							$galeria->id_categoria = $this->requestParametrosPost['id_categoria'];
							$galeria->foto = $handle->file_dst_name;
							$galeria->save();
						} else {
							echo 'error : ' . $handle->error;
						}
					}
				}
			}

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/galeria/gerenciar-fotos');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function gerenciar_fotos() {
		try {
			$fotos = Galeria_Fotos::sql('select gf.*, gc.titulo from :table gf, galeria_categorias gc where gf.id_categoria = gc.id');

			$_SESSION['paginaAtual'] = 'galeria-imagens/gerenciar';
			$this->renderView('galeria-imagens/gerenciar', $fotos);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function excluir_foto() {
		try {
			$id = $this->requestParametrosGet[0];
			$foto = Galeria_Fotos::retrieveByPK($id);
			$foto->delete();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/galeria/gerenciar-fotos');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}
}

?>