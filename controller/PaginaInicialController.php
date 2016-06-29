<?php
require 'Controller.php';
require caminhoFisico . '/model/PaginaInicial.php';
require caminhoFisico . '/helper.php';

class PaginaInicialController extends Controller {
	public function novo_slide() {
		$_SESSION['paginaAtual'] = 'pagina-inicial/gerenciar';
		$this->renderView('pagina-inicial/novo_slide');	
	}

	public function editar_slide() {
		$id = $this->requestParametrosGet[0];
		$slide = Pagina_Inicial_Slides::retrieveByPK($id);
		setSession("paginaAtual", "pagina-inicial/gerenciar");
		$this->renderView('pagina-inicial/editar_slide', $slide);
	}

	public function salvar() {
		try {
			$ult_ordem = Pagina_Inicial_Slides::sql('select ordem from :table order by ordem desc limit 1');
			$slide = new Pagina_Inicial_Slides();
			$slide->titulo = $this->requestParametrosPost['titulo'];
			$slide->subtitulo = $this->requestParametrosPost['subtitulo'];
			$slide->link = $this->requestParametrosPost['link'];
			$slide->link_video = $this->requestParametrosPost['link_video'];
			$slide->ordem = $ult_ordem[0]->ordem + 1;

            if (!empty($_FILES['imagem']['name'])) {
                $handle = new upload($_FILES['imagem']);
                if ($handle->uploaded) {
                    $handle->image_resize         = false;
                    // $handle->image_x              = 100;
                    // $handle->image_ratio_y        = true;
                    $handle->process(caminhoFisico . '/uploads/');
                    if ($handle->processed) {
                        $handle->clean();
                        $slide->imagem = $handle->file_dst_name;
                    } else {
                        echo 'error : ' . $handle->error;
                    }
                }
            }

			$slide->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/pagina-inicial/gerenciar-slides');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}

	}

	public function salvar_edicao() {
		$id = $this->requestParametrosPost['id'];
		$slide = Pagina_Inicial_Slides::retrieveByPK($id);
		$slide->titulo = $this->requestParametrosPost['titulo'];
		$slide->subtitulo = $this->requestParametrosPost['subtitulo'];
		$slide->link = $this->requestParametrosPost['link'];
		$slide->link_video = $this->requestParametrosPost['link_video'];

		$handle = new upload($_FILES['imagem']);
		if ($handle->uploaded) {
			$handle->file_new_name_body   = date("YmdHis");
			$handle->image_resize         = false;
			// $handle->image_x              = 100;
			// $handle->image_ratio_y        = true;
			$handle->process(caminhoFisico . '/uploads/');
			if ($handle->processed) {
				$handle->clean();
				$slide->imagem = $handle->file_dst_name;
			} else {
				echo 'error : ' . $handle->error;
			}
		}

		$slide->save();

		setSession('sucesso', 'S');
    	$this->redirect(caminhoSite . '/pagina-inicial/gerenciar-slides');
	}

	public function deletar_slide() {
		$id = $this->requestParametrosGet[0];
		$slide = Pagina_Inicial_Slides::retrieveByPK($id);
		$slide->delete();
		
		setSession('sucesso', 'S');
    	$this->redirect(caminhoSite . '/pagina-inicial/gerenciar-slides');
	}	

	public function gerenciar_slides() {
		$slides = Pagina_Inicial_Slides::all();
		$_SESSION['paginaAtual'] = 'pagina-inicial/gerenciar';
		$this->renderView('pagina-inicial/gerenciar_slides', $slides);	
	}

	public function salva_ordem() {
		$ordens = $this->requestParametrosPost['ordens'];
        var_dump($ordens);
		unset($ordens[0]);
		$slides = Pagina_Inicial_Slides::all();
		foreach ($slides as $slide) {
			$slide->ordem = null;
			$slide->save();
		}
		foreach ($ordens as $key => $value) {
			$slide = Pagina_Inicial_Slides::retrieveByPK($value);
			$slide->ordem = $key;
			$slide->save();
		}
		echo 'Certo';
	}
}

?>