<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-home"></span>&nbsp;Página Inicial</h1>
            <h4 class="sub-title">Gerenciar ítens da página inicial.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Banner principal</h3>
                </div>
                <div class="box-content">
                	<form>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto</label>
                            <div class="col-sm-10">
                            	<textarea name="inputConteudo" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                    </form>
                    
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Selecione a imagem</label>
                        <div class="col-sm-10">
                            <input id="input-1a" type="file" class="file" data-show-preview="false">
                        </div>
                    </div><br>
                </div>
            </div><br>
            <button type="button" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-minus"></span>&nbsp;&nbsp;Rodapé</h3>
                </div>
                <div class="box-content">
                	<form>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto</label>
                            <div class="col-sm-10">
                            	<textarea name="inputConteudo" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>