<?php
    $alojamento = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <form id="formEditarAlojamento" method="post" action="<?= caminhoSite ?>/meus-alojamentos/salvar-edicao-alojamento" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $alojamento->id ?>"> 
                <h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Editar Alojamento</h1>
                <h4 class="sub-title">Editar Alojamento.</h4>
                
                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Título (h2)</h3>
                    </div>
                    <div class="box-content">                	
                            <div class="control-group row">
                                <label class="col-sm-2 control-label" align="right">Título</label>
                                <div class="col-sm-10">
                                	<input type="text" class="form-control" name="titulo" value="<?= $alojamento->titulo ?>">
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
                            	<textarea name="breve_descricao" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $alojamento->breve_descricao ?>
                                </textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Descrição Completa</label>
                            <div class="col-sm-10">
                            	<textarea name="descricao_completa" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $alojamento->descricao_completa ?>   
                                </textarea>
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
                            	<input type="text" class="form-control" placeholder="example-teste" name="slug" value="<?= $alojamento->slug ?>">
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
                        <?php
                            if (!empty($alojamento->fotos)) {
                        ?>                        
                        <div class="control-group row" id="fotos-atuais">
                            <label class="col-sm-2 control-label" align="right">Remover Fotos</label>

                            <div class="col-sm-10">
                                <a href="<?= $alojamento->id ?>" id="remove-fotos"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Remover Todas</button></a>
                                <br>
                                <br>
                                <?php
                                    $fotos = json_decode($alojamento->fotos);
                                    foreach ($fotos as $foto) {
                                        $result = extractNameExtFile($foto);
                                ?>
                                        <!-- <img src="<?= caminhoSite ?>/uploads/<?= $foto ?>" class="img-responsive"> -->
                                        <div class="col-xs-4" style="padding-top: 2%">                                            
                                            <a data-id="<?= $alojamento->id ?>" data-nome="<?= $foto ?>" class="removeFoto"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Remover Imagem</button></a>
                                            <br>
                                            <hr>                                            
                                            <img src="<?= caminhoSite ?>/uploads/<?= $result[0] . '_250x250.' . $result[1] ?>" alt="" class="img-thumbnail">
                                        </div>                                        
                                <?php
                                    }
                                ?>
                            </div>
                        </div><br>
                        <?php
                            }
                        ?>
                    </div>
                </div><br>
            </form>
            <button type="button" onclick="document.getElementById('formEditarAlojamento').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#remove-fotos').click(function(event) {
            event.preventDefault();

            var id = $(this).attr('href');

            $.ajax({
                url: '<?= caminhoSite ?>/meus-alojamentos/remover-fotos/' + id,                                                                
            })
            .done(function() {
                console.log("success");
                $('#fotos-atuais').remove();
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });
        $('.removeFoto').click(function(event) {
            event.preventDefault();

            var imagem = $(this).closest('div');
            var id = $(this).attr('data-id');
            var nome_imagem = $(this).attr('data-nome');

            $.ajax({
                url: '<?= caminhoSite ?>/meus-alojamentos/remove-foto/' + id + '/' + nome_imagem + '/',
            })
            .done(function() {
                console.log("success");
                imagem.remove();
                swal("Pronto!", "Sua imagem foi excluida!", "success");
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