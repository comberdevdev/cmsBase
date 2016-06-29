<?php
require 'Controller.php';
require caminhoFisico . '/model/Captcha.php';
require caminhoFisico . '/model/Seo.php';
require caminhoFisico . '/model/Analytics.php';
require caminhoFisico . '/helper.php';

class GoogleController extends Controller {
	public function recaptcha() {
		try {
			$recaptcha = Google_Captcha::retrieveByPK(1);
			setSession("paginaAtual", "google/gerenciar");
			$this->renderView('google/captcha', $recaptcha);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salvar_captcha() {
		try {
			$recaptcha = Google_Captcha::retrieveByPK(1);
			$recaptcha->site_key = $this->requestParametrosPost['site_key'];
			$recaptcha->secret_key = $this->requestParametrosPost['secret_key'];
			$recaptcha->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/google/recaptcha');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function seo() {
		try {
			setSession("paginaAtual", "google/gerenciar");
			$this->renderView('google/seo');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function seo_busca() {
		$id = $this->requestParametrosGet[0];
		$seo = Google_Seo::retrieveByPK($id);

		echo json_encode($seo);
	}

	public function salvar_seo() {
		try {
			$id = $this->requestParametrosPost['id'];
			$seo = Google_Seo::retrieveByPK($id);
			$seo->title = $this->requestParametrosPost['title'];
			$seo->description = $this->requestParametrosPost['description'];
			$seo->keywords = $this->requestParametrosPost['keywords'];
			$seo->author = $this->requestParametrosPost['author'];
			$seo->copyright = $this->requestParametrosPost['copyright'];
			$seo->application_name = $this->requestParametrosPost['application_name'];
			$seo->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/google/seo');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function dados_analytics() {
		try {
			$analytics = Google_Analytics::retrieveByPK(1);

			setSession("paginaAtual", "google/gerenciar");
			$this->renderView('google/analytics', $analytics);
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}

	public function salva_analytics() {
		try {
			$analytics = Google_Analytics::retrieveByPK(1);
			$analytics->codigo_ua = $this->requestParametrosPost['codigo_ua'];
			$analytics->save();

			setSession('sucesso', 'S');
			$this->redirect(caminhoSite . '/google/dados-analytics');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}
}

?>