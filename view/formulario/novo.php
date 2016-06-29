<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-comment"></span>&nbsp;Novo Formulário</h1>
            <h4 class="sub-title">Adicione um novo formulário.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Informações do Formulário</h3>
                </div>
                <div class="box-content">
                	<form>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Nome do formulário</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Tipo</label>
                            <div class="col-sm-5">
                            	<div class="radio">
                                	<label><input name="check" id="check" type="radio" value="" onClick="show()"> Com arquivo</label>&nbsp;
                                    <label><input name="check" id="check" type="radio" value="" onClick="hide()"> Sem arquivo</label>
                                </div>
                            </div>
                        </div><br>
                        <div class="control-group row" id="arquivos" name="arquivos">
                            <label class="col-sm-2 control-label" align="right">Selecione</label>
                            <div class="col-sm-5">
                            	<div class="checkbox">
                                	<label><input name="check" id="check" type="checkbox" value=""> PDF</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> TXT</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> DOC</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> DOCX</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> JPG</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> PNG</label><br>
                                </div>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Campos</label>
                            <div class="col-sm-2">
                            	<div class="checkbox">
                                	<label><input name="check" id="check" type="checkbox" value=""> Nome</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Sobrenome</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Data</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Endereço</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Número</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Cidade</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Bairro</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Telefone</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Celular</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Texto</label><br>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                            	<div class="checkbox">
                                	<label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                    <label><input name="check" id="check" type="checkbox" value=""> Obrigatório</label><br>
                                </div>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;Notificações</h3>
                </div>
                <div class="box-content">
                	<form>
                    	<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Para</label>
                            <div class="col-sm-10">
                            	<div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">To:</span>
                                    <input type="text" class="form-control" placeholder="example@example.com" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Cópia</label>
                            <div class="col-sm-10">
                            	<div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Cc:</span>
                                    <input type="text" class="form-control" placeholder="example@example.com" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Assunto</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control">
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Selecione a Página</h3>
                </div>
                <div class="box-content">
                	<form>
                    	<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Página</label>
                            <div class="col-sm-10">
                            	<select class="form-control">
                                	<option selected value="">Selecione a página</option>
                                    <option value="">Categoria Teste 01</option>
                                    <option value="">Categoria Teste 02</option>
                                    <option value="">Categoria Teste 03</option>
                                    <option value="">Categoria Teste 04</option>
                                </select>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>