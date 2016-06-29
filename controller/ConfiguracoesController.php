<?php
require 'Controller.php';
require caminhoFisico . '/model/Configuracoes.php';
require caminhoFisico . '/helper.php';

class ConfiguracoesController extends Controller {
	public function editar() {
		try {
			$configuracoes = Configuracoes::retrieveByPK(1);
			setSession("paginaAtual", "configuracoes/geral");
			$this->renderView('configuracoes/geral', $configuracoes);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salvar() {
        try {
            $configuracoes = Configuracoes::retrieveByPK(1);
            $configuracoes->titulo_site = $this->requestParametrosPost['titulo_site'];
            $configuracoes->endereco = $this->requestParametrosPost['endereco'];
            $configuracoes->telefone1 = $this->requestParametrosPost['telefone1'];
            $configuracoes->telefone2 = $this->requestParametrosPost['telefone2'];
            $configuracoes->telefone_celular = $this->requestParametrosPost['telefone_celular'];
            $configuracoes->email = $this->requestParametrosPost['email'];
            $configuracoes->rodape_texto = $this->requestParametrosPost['rodape_texto'];
            $configuracoes->texto_primario = $this->requestParametrosPost['texto_primario'];
            $configuracoes->texto_secundario = $this->requestParametrosPost['texto_secundario'];

            $handle = new upload($_FILES['img_fundo']);
            if ($handle->uploaded) {
                $handle->image_resize         = false;
                // $handle->image_x              = 100;
                // $handle->image_ratio_y        = true;
                $handle->process(caminhoFisico . '/uploads/');
                if ($handle->processed) {
                    $handle->clean();
                    $configuracoes->img_fundo = $handle->file_dst_name;
                } else {
                    echo 'error : ' . $handle->error;
                }
            }

            $handle = new upload($_FILES['rodape_imagem']);
            if ($handle->uploaded) {
                $handle->image_resize         = false;
                // $handle->image_x              = 100;
                // $handle->image_ratio_y        = true;
                $handle->process(caminhoFisico . '/uploads/');
                if ($handle->processed) {
                    $handle->clean();
                    $configuracoes->rodape_imagem = $handle->file_dst_name;
                } else {
                    echo 'error : ' . $handle->error;
                }
            }

            $handle = new upload($_FILES['mapa_contato']);
            if ($handle->uploaded) {
                $handle->file_new_name_body   = date("YmdHis");
                $handle->image_resize         = false;
                // $handle->image_x              = 100;
                // $handle->image_ratio_y        = true;
                $handle->process(caminhoFisico . '/uploads/');
                if ($handle->processed) {
                    $handle->clean();
                    $configuracoes->mapa_contato = $handle->file_dst_name;
                } else {
                    echo 'error : ' . $handle->error;
                }
            }

            $configuracoes->link_mapa = $this->requestParametrosPost['link_mapa'];
            $configuracoes->save();

            setSession('sucesso', 'S');
            $this->redirect(caminhoSite . '/configuracoes-gerais/editar');
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}

	public function editar_redes_sociais() {
        try {
            $configuracoes = Configuracoes::retrieveByPK(1);
            setSession("paginaAtual", "configuracoes/geral");
            $this->renderView('configuracoes/social', $configuracoes);
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}

	public function salvar_redes_sociais() {
        try {
            $configuracoes = Configuracoes::retrieveByPK(1);
            $configuracoes->facebook = $this->requestParametrosPost['facebook'];
            $configuracoes->instagram = $this->requestParametrosPost['instagram'];
            $configuracoes->twitter = $this->requestParametrosPost['twitter'];
            $configuracoes->google_plus = $this->requestParametrosPost['google_plus'];
            $configuracoes->youtube = $this->requestParametrosPost['youtube'];
            $configuracoes->vimeo = $this->requestParametrosPost['vimeo'];
            $configuracoes->save();

            setSession('sucesso', 'S');
            $this->redirect(caminhoSite . '/redes-sociais/editar');
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}
}

?>