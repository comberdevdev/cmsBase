<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Motos.php';
	require caminhoFisico . '/helper.php';

	class MotosController extends Controller {
		public function listar(){
			try {
				/* Insert
				$moto = new Motos();
				$moto->nome = "drop";
				$moto->save();*/

				// Pega todos os registros da tabela motos
				$motos = Motos::all();

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php', $configuracoes);
				$this->renderView('motos/gerenciar', $motos);

				/* Update
				$moto = Motos::retrieveByPk(posicao);
				$moto->nome = "drop";
				$moto->save();*/

				/* Delete
				$moto = Motos::retrieveByPk(posicao);
				$moto->delete();*/
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function excluir(){
			try {
				$id = $this->requestParametrosGet[0];
				$moto = Motos::retrieveByPk($id);
				$moto->delete();

				// setSession("nome da sessão", "valor");
				setSession("sucesso", "S");

				// $this->redirect(caminho do site . 'aonde redirecionar');
				$this->redirect(caminhoSite . '/motos/listar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function editar(){
			try {
				$id = $this->requestParametrosGet[0];
				$moto = Motos::retrieveByPk($id);

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php', $configuracoes);
				$this->renderView('motos/editar_moto', $moto);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function salvarEdicao(){
			try {
				$id = $this->requestParametrosPost["id"];
				$moto = Motos::retrieveByPk($id);
				$moto->nome = $this->requestParametrosPost["nome"];
				$moto->slug = $this->requestParametrosPost["slug"];
				$moto->video = $this->requestParametrosPost["video"];
				$moto->preco = $this->requestParametrosPost["preco"];
				$moto->descricao = $this->requestParametrosPost["descricao"];

				if (!empty($_FILES['img_destaque']['name'])) {
					$handle = new upload($_FILES['img_destaque']);
					if ($handle->uploaded) {
						$handle->image_resize         = true;
						$handle->image_ratio_crop     = true;
						$handle->image_y              = 250;
						$handle->image_x              = 250;
						$handle->process(caminhoFisico . '/uploads/');
						$handle->file_new_name_body   = $data_hora;
						$handle->image_resize         = false;
						$handle->process(caminhoFisico . '/uploads/');

						if ($handle->processed) {
							$handle->clean();
							$moto->img_destaque = $handle->file_dst_name;
						} else {
							echo 'error : ' . $handle->error;
						}
					}
				}

				if (!empty($_FILES['fotos']['name'])) {
					$file_ary = reArrayFiles($_FILES['fotos']);

					foreach ($file_ary as $file) {
						$handle = new upload($file);
						if ($handle->uploaded) {
							$handle->image_resize         = true;
							$handle->image_ratio_crop     = true;
							$handle->image_y              = 250;
							$handle->image_x              = 250;
							$handle->process(caminhoFisico . '/uploads/');
							$handle->file_new_name_body   = $data_hora;
							$handle->image_resize         = false;
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
						if ($moto->fotos != '') {
							$fotos_atuais = json_decode($moto->fotos);
							foreach ($fotos_atuais as $value) {
								$fotos[] = $value;
							}
							$fotos_json = json_encode($fotos);
						} else {
							$fotos_json = json_encode($fotos);
						}
						$moto->fotos = $fotos_json;
					}
					
					// $fotos_json = json_encode($fotos);
					// $moto->fotos = $fotos_json;
				}

				$moto->save();

				// setSession("nome da sessão", "valor");
				setSession("sucesso", "S");

				// $this->redirect(caminho do site . 'aonde redirecionar');
				$this->redirect(caminhoSite . '/motos/listar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function novo(){
			try {
				$caracteristicas = Caracteristicas::all();
				$acessorios = Acessorios::all();

				$parametros = array('caracteristicas' => $caracteristicas, 'acessorios' => $acessorios);

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php');
				$this->renderView('motos/nova_moto', $parametros);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function salvar(){
			// insert
			try {
				$moto = new Motos();
				$moto->nome = $this->requestParametrosPost["nome"];
				$moto->slug = $this->requestParametrosPost["slug"];
				$moto->video = $this->requestParametrosPost["video"];
				$moto->preco = $this->requestParametrosPost["preco"];
				$moto->descricao = $this->requestParametrosPost["descricao"];
				//var_dump($_FILES);

				if (!empty($_FILES['img_destaque'])) {
					$handle = new upload($_FILES['img_destaque']);
					if ($handle->uploaded) {
						$handle->image_resize         = true;
						$handle->image_ratio_crop     = true;
						$handle->image_y              = 250;
						$handle->image_x              = 250;
						$handle->process(caminhoFisico . '/uploads/');
						$handle->image_resize         = false;
						$handle->process(caminhoFisico . '/uploads/');

						if ($handle->processed) {
							$handle->clean();
							$moto->img_destaque = $handle->file_dst_name;
						} else {
							echo 'error : ' . $handle->error;
						}
					}
				}

				if (!empty($_FILES['fotos'])) {
					$file_ary = reArrayFiles($_FILES['fotos']);

					foreach ($file_ary as $file) {
						$handle = new upload($file);
						if ($handle->uploaded) {
							$handle->image_resize         = true;
							$handle->image_ratio_crop     = true;
							$handle->image_y              = 250;
							$handle->image_x              = 250;
							$handle->process(caminhoFisico . '/uploads/');
							$handle->file_new_name_body   = $data_hora;
							$handle->image_resize         = false;
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
					$moto->fotos = $fotos_json;
				}

				$moto->save();

				// setSession("nome da sessão", "valor");
				setSession("sucesso", "S");

				// $this->redirect(caminho do site . 'aonde redirecionar');
				$this->redirect(caminhoSite . '/motos/listar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function remover_fotos() {
			$id = $this->requestParametrosGet[0];
			$moto = Motos::retrieveByPK($id);
			$moto->fotos = '';
			$moto->save();

			echo 'Removido';
		}

		public function remove_foto() {
			$id = $this->requestParametrosGet[0];
			$nome_imagem = $this->requestParametrosGet[1];
			$moto = Motos::retrieveByPK($id);
			$fotos = json_decode($moto->fotos);
			$key = array_search($nome_imagem, $fotos);
			unset($fotos[$key]);
            $fotos = array_values($fotos);
			$moto->fotos = json_encode($fotos);
			$moto->save();

			echo 'Removido';
		}

		/* public function nova_caracteristica(){
			try {
				$motos = Motos::all();
				$caracteristicas = Moto_Caracteristicas::sql('select mc.*, m.nome from motos m, motos_caracteristicas mc where m.id = mc.id_moto');
				$parametros = array('motos' => $motos, 'caracteristicas' => $caracteristicas);
				setSession("paginaAtual", "motos/geral");
				$this->renderView('motos/gerenciar_caracteristica', $parametros);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_caracteristica(){
			try {
				if(!empty($this->requestParametrosPost["id"])){
					$caracteristica = Moto_Caracteristicas::retrieveByPk($this->requestParametrosPost["id"]);
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}else{
					$caracteristica = new Moto_Caracteristicas();
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
					$caracteristica->id_moto = $this->requestParametrosPost["id_moto"];
				}
				$caracteristica->save();

				setSession("sucesso", "S");
				$this->redirect(caminhoSite . '/motos/nova_caracteristica');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function excluir_caracteristica(){
			try {
				$id = $this->requestParametrosGet[0];
				$caracteristica = Moto_Caracteristicas::retrieveByPk($id);
				$caracteristica->delete();

				setSession("sucesso", "S");
				$this->redirect(caminhoSite . '/motos/gerenciar_caracteristica');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function buscar_dados(){
			$id = $this->requestParametrosGet[0];
			$caracteristica = Moto_Caracteristicas::retrieveByPk($id);

			echo json_encode($caracteristica);
		} */

		// Motos - características
		public function nova_caracteristica(){
			try {
				$caracteristicas = Caracteristicas::all();
				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php');
				$this->renderView('motos/nova_caracteristica',$caracteristicas);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_caracteristica(){
			try {
				if(!empty($this->requestParametrosPost["id"])){
					$caracteristica = Caracteristicas::retrieveByPk($this->requestParametrosPost["id"]);
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}else{
					$caracteristica = new Caracteristicas();
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}
				$caracteristica->save();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/nova-caracteristica');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function buscar_caracteristicas(){
			$id = $this->requestParametrosGet[0];
			$caracteristicas = Caracteristicas::retrieveByPk($id);

			echo json_encode($caracteristicas);
		}
		public function editar_caracteristica(){
			try {
				$id = $this->requestParametrosGet[0];
				$caracteristica = Caracteristicas::retrieveByPk($id);

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php', $configuracoes);
				$this->renderView('motos/nova_caracteristica', $caracteristica);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_edicao_caracteristica(){
			try {
				$$id = $this->requestParametrosPost['id'];
				$caracteristica = Caracteristicas::retrieveByPK($id);
				$caracteristica->caracteristica = $this->requestParametrosPost['caracteristica'];
				$caracteristica->save();

				setSession("sucesso", "S");

				// $this->redirect(caminho do site . '/motos/url/' . id);
				$this->redirect(caminhoSite . '/motos/nova-caracteristica/' . $id);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function excluir_caracteristica(){
			try {
				$id = $this->requestParametrosGet[0];
				$caracteristica = Caracteristicas::retrieveByPk($id);
				$caracteristica->delete();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/nova-caracteristica');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		// Motos - acessorios
		public function novo_acessorio(){
			try {
				$acessorios = Acessorios::all();
				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php');
				$this->renderView('motos/novo_acessorio',$acessorios);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_acessorio(){
			try {
				if(!empty($this->requestParametrosPost["id"])){
					$acessorio = Acessorios::retrieveByPk($this->requestParametrosPost["id"]);
					$acessorio->acessorio = $this->requestParametrosPost["acessorio"];
				}else{
					$acessorio = new Acessorios();
					$acessorio->acessorio = $this->requestParametrosPost["acessorio"];
				}
				$acessorio->save();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/novo-acessorio');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function buscar_acessorios(){
			$id = $this->requestParametrosGet[0];
			$acessorios = Acessorios::retrieveByPk($id);

			echo json_encode($acessorios);
		}
		public function editar_acessorio(){
			try {
				$id = $this->requestParametrosGet[0];
				$acessorio = Acessorios::retrieveByPk($id);

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php', $configuracoes);
				$this->renderView('motos/novo_acessorio', $acessorio);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_edicao_acessorio(){
			try {
				$$id = $this->requestParametrosPost['id'];
				$acessorio = Acessorios::retrieveByPK($id);
				$acessorio->acessorio = $this->requestParametrosPost['acessorio'];
				$acessorio->save();

				setSession("sucesso", "S");

				// $this->redirect(caminho do site . '/motos/url/' . id);
				$this->redirect(caminhoSite . '/motos/novo-acessorio/' . $id);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function excluir_acessorio(){
			try {
				$id = $this->requestParametrosGet[0];
				$acessorio = Acessorios::retrieveByPk($id);
				$acessorio->delete();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/novo-acessorio');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
	}
?>