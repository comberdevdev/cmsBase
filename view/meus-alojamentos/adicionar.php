<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <form id="formNovoAlojamento" method="post" action="<?= caminhoSite ?>/meus-alojamentos/salvar-alojamento" enctype="multipart/form-data">
                <h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Adicionar Alojamento</h1>
                <h4 class="sub-title">Adicione um novo Alojamento.</h4>
                
                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Título (h2)</h3>
                    </div>
                    <div class="box-content">                	
                            <div class="control-group row">
                                <label class="col-sm-2 control-label" align="right">Título</label>
                                <div class="col-sm-10">
                                	<input type="text" class="form-control" name="titulo">
                                </div>
                            </div><br>
                    </div>
                </div>
                
                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><span class="glyphicon glyphicon-font"></span>&nbsp;&nbsp;Descrição</h3>
                    </div>
                    <div class="box-content">                	
                    	<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Breve Descrição</label>
                            <div class="col-sm-10">
                            	<textarea name="breve_descricao" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Descrição Completa</label>
                            <div class="col-sm-10">
                            	<textarea name="descricao_completa" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>                    
                    </div>
                </div>
                
                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Slug</h3>
                    </div>
                    <div class="box-content">                	
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Slug</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" placeholder="example-teste" name="slug">
                            </div>
                        </div><br>                    
                    </div>
                </div>
                
                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Fotos</h3>
                    </div>
                    <div class="box-content">
                    	<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Fotos</label>

                           <div class="col-sm-10">
                                <input type="file" name="fotos[]" id="file" class="inputfile inputfile-1" data-multiple-caption="{count} arquivos selecionados" multiple/>
                                <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </div>
                </div><br>
            </form>
            <button type="button" onclick="document.getElementById('formNovoAlojamento').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>