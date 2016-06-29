<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Página Inicial - Adicionar novo slide</h1>
            <h4 class="sub-title">Adicionar novo slide para a página inicial.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Novo slide</h3>
                </div>
                <div class="box-content">
                	<form id="formNovoSlide" method="post" action="<?= caminhoSite ?>/pagina-inicial/salvar-slide" enctype="multipart/form-data">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título (H1)</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="titulo">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Subtitulo (H2)</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="subtitulo">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Vídeo</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="link_video">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Imagem</label>

                           <div class="col-sm-10">
                                <input type="file" name="imagem" id="file" class="inputfile inputfile-1" required />
                                <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </form>            
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formNovoSlide').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>