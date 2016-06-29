<?php
    $configuracoes = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-cog fa-spin fa-fw"></i><span class="sr-only">Loading...</span>&nbsp;Configurações Gerais</h1>
            <h4 class="sub-title">Gerenciar as informações gerais do site.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;Geral</h3>
                </div>
                <div class="box-content">
                    <?php
                        if (!empty($_SESSION['sucesso'])) {
                            if ($_SESSION['sucesso'] == 'S') {
                    ?>
                                <script type="text/javascript">
                                    swal("Pronto!", "Alterações gravadas com sucesso!", "success");
                                </script>
                    <?php
                            } else {
                    ?>
                                <script type="text/javascript">
                                    swal("Erro!", "Não foi possível salvar as alterações!", "error");
                                </script>
                    <?php
                            }
                            unset($_SESSION['sucesso']);
                        }
                    ?>
                    
                	<form id="formConfiguracoes" method="post" action="<?= caminhoSite ?>/configuracoes-gerais/salvar" enctype="multipart/form-data">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título do site</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" value="<?= $configuracoes->titulo_site ?>" name="titulo_site">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Endereço</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" value="<?= $configuracoes->endereco ?>" name="endereco">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Telefone 01</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" value="<?= $configuracoes->telefone1 ?>" name="telefone1">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Telefone 02</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" value="<?= $configuracoes->telefone2 ?>" name="telefone2">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Telefone celular</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" value="<?= $configuracoes->telefone_celular ?>" name="telefone_celular">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Email</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" value="<?= $configuracoes->email ?>" name="email">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 1</label>
                            <div class="col-sm-10">
                                <textarea name="texto_primario" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $configuracoes->texto_primario ?>
                                </textarea>
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 2</label>
                            <div class="col-sm-10">
                                <textarea name="texto_secundario" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $configuracoes->texto_secundario ?>
                                </textarea>
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link do Mapa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= $configuracoes->link_mapa ?>" name="link_mapa">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Imagem de fundo</label>
                            <div class="col-sm-10">
                                <?php
                                    if (!empty($configuracoes->img_fundo)) {
                                ?>
                                        <img src="<?= caminhoSite ?>/uploads/<?= $configuracoes->img_fundo ?>" class="img-responsive">
                                <?php
                                    }
                                ?><br><br>

                                <input type="file" name="img_fundo" id="img_fundo" class="inputfile inputfile-1" />
                                <label for="img_fundo"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label></path>
                            </div>
                        </div><br><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Logo rodape</label>
                            <div class="col-sm-10">
                                <?php
                                    if (!empty($configuracoes->rodape_imagem)) {
                                ?>
                                        <img src="<?= caminhoSite ?>/uploads/<?= $configuracoes->rodape_imagem ?>" class="img-responsive">
                                <?php
                                    }
                                ?><br><br>
                                
                                <input type="file" name="rodape_imagem" id="rodape_imagem" class="inputfile inputfile-1" />
                                <label for="rodape_imagem"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label></path>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formConfiguracoes').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>