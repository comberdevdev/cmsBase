<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;SEO</h1>
            <h4 class="sub-title">Gerencie as tags essenciais para cada página.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Meta-tags</h3>
                </div>
                <div class="box-content">
                	<form id="formSeo" method="post" action="<?= caminhoSite ?>/google/salvar-seo">
                        <input type="hidden" id="id" name="id" value="">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Página</label>
                            <div class="col-sm-10">
                            	<select class="form-control" id="listPaginas">
                                	<option selected value="">Selecione a página</option>
                                    <option value="1">Home</option>
                                    <option value="2">A Chácara</option>
                                    <option value="3">Galeria</option>
                                    <option value="4">Contatos</option>
                                    <option value="5">Detalhes Alojamento</option>
                                </select>
                            </div>
                        </div><br>
                        
                        <!-- META-TAG TITLE -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Title</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="title" name="title" >
                            </div>
                        </div><br>
                        
                        <!-- META-TAG DESCRIPTION -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Description</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG KEYWORDS -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Keywords</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="keywords" name="keywords">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG AUTHOR -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Author</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="author" name="author">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG COPYRIGHT -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Copyright</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="copyright" name="copyright">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG APPLICATION NAME -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Application name</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="application_name" name="application_name">
                            </div>
                        </div><br>
                        
                        <!-- META-TAG CANONICAL -->
                        <!-- <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Canonical</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" readonly>
                            </div>
                        </div><br> -->
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formSeo').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#listPaginas').change(function(event) {
            var value = $(this).val();

            $.ajax({
                url: '<?= caminhoSite ?>/google/seo-busca/' + value,
                dataType: 'json',
            })
            .done(function(data) {            
                console.log(data.pagina);
                $('#id').val(data.id);
                $('#title').val(data.title);
                $('#description').val(data.description);
                $('#keywords').val(data.keywords);
                $('#author').val(data.author);
                $('#copyright').val(data.copyright);
                $('#application_name').val(data.application_name);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });
    });
</script>