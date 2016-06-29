<?php
require 'Controller.php';
require caminhoFisico . '/includes/Bcrypt.php';

class TesteController extends Controller {
    public function testeJavaScript() {
        $param = json_decode($this->requestParametrosPost['param']);
        echo $param[0]['idCaracteristica'];
    }

	public function teste() {
		$login = "Um teste de or '1='1;";
		$resultado = preg_replace('/[^[:alpha:]_]/', '',$login);
		echo $resultado;		
	}

    public function senha() {
        ?>
            <form action="<?= caminhoSite ?>/gerarSenha" method="post"">
            Senha: <input type="text" name="senha">
            <input type="submit" value="Gerar">
            </form>
        <?php
    }

	public function gerarSenha() {
        echo Bcrypt::hash($this->requestParametrosPost['senha']);
    }

    public function verificaSenha() {
        ?>
        <form action="<?= caminhoSite ?>/comparaSenha" method="post"">
            Senha: <input type="text" name="senha">
            Hash: <input type="text" name="hash">
            <input type="submit" value="Testar">
        </form>
        <?php
    }

    public function comparaSenha() {
        $senha = $this->requestParametrosPost['senha'];
        $hash = $this->requestParametrosPost['hash'];
        echo $hash;
        if (Bcrypt::check($senha, $hash)) {
            echo 'Certo';
        } else {
            echo 'Errado';
        }
    }
}

?>