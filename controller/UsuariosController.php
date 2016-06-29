<?php
require 'Controller.php';
require caminhoFisico . '/model/Usuario.php';
require caminhoFisico . '/helper.php';
require caminhoFisico . '/includes/Bcrypt.php';

class UsuariosController extends Controller {
	public function login() {
        try {
		    $this->renderViewUnique('login/index');
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}

	public function faz_login() {
        try {
            $email = addslashes($this->requestParametrosPost['email']);
            $senha = addslashes($this->requestParametrosPost['senha']);
            $usuario = Usuarios::sql("SELECT * FROM :table WHERE email = '" . $email . "'", SimpleOrm::FETCH_ONE);

            if (!empty($usuario)) {
                if (Bcrypt::check($senha, $usuario->senha)) {
                    unsetSession('erroLogin');
                    setSession('usuLogado', 'S');
                    setSession('usuNome', $usuario->nome);
                    setSession('usuEmail', $usuario->email);
                    $this->redirect(caminhoSite . '/home');
                } else {
                    setSession('erroLogin', 'S');
                    $this->redirect(caminhoSite . '/usuarios/login');
                }
            } else {
                setSession('erroLogin', 'S');
                $this->redirect(caminhoSite . '/usuarios/login');
            }
            // $this->redirect(caminhoSite . '/usuarios/login');
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}

	public function logout() {
        try {
            unsetSession('usuLogado');
            unsetSession('usuNome');
            unsetSession('usuEmail');
            $this->redirect(caminhoSite . '/usuarios/login');
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}

	public function nao_logado() {
        try {
		    $this->renderViewUnique('login/nao_logado');
        } catch (Exception $e) {
            $this->renderViewUnique('/errors/errorServidor', $e);
        }
	}
}

?>