<?php
    $chacara = $_SESSION['parametrosView']['chacara'];
    $chacara_itens = $_SESSION['parametrosView']['chacara_itens'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-leaf"></span>&nbsp;A Chácara</h1>
            <h4 class="sub-title">Gerenciar conteúdo.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Introdução</h3>
                </div>
                <div class="box-content">
                	<form id="formIntroducao" method="post" action="<?= caminhoSite ?>/achacara/salva-introducao">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 1</label>
                            <div class="col-sm-10">
                                <textarea name="introducao" type="text" id="inputConteudo" class="form-control wmd-container tinyMCE" cols="10" rows="10">
                                    <?= $chacara->introducao ?>
                                </textarea>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formIntroducao').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Box</h3>
                </div>
                <div class="box-content">
                	<form id="formDados" method="post" action="<?= caminhoSite ?>/achacara/salva-dados">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título (h1)</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="titulo" value="<?= $chacara->titulo ?>">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Subtitulo (h2)</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="subtitulo" value="<?= $chacara->subtitulo ?>">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 1</label>
                            <div class="col-sm-10">
                            	<textarea name="texto1" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $chacara->texto1 ?>
                                </textarea>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 2</label>
                            <div class="col-sm-10">
                            	<textarea name="texto2" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $chacara->texto2 ?>
                                </textarea>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Cor de fundo</label>
                            <div class="col-sm-10">
                            	<input type="color" class="form-control" name="cor_fundo" value="<?= $chacara->cor_fundo ?>">
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formDados').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            
            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Slides</h3>
                </div>
                <div class="box-content">
                    <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Titulo</th>                                    
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($chacara_itens as $item) {
                                ?>
                                        <tr>
                                            <td>
                                                <img src="<?= caminhoSite ?>/uploads/<?= $item->icone ?>" class="img-responsive">
                                            </td>
                                            <td><?= $item->titulo ?></td>                                            
                                            <td>
                                                <center>
                                                    <a href="#" class="btnEditar" data-id="<?= $item->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="<?= caminhoSite ?>/achacara/deletar-item/<?= $item->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                                </center>
                                            </td>
                                        </tr>
                                <?php        
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title" id="tituloIconeBox"><span class="glyphicon glyphicon-font"></span>&nbsp;&nbsp; Novo Item</h3>
                </div>
                <div class="box-content">
                	<form id="formItemChacara" method="post" action="<?= caminhoSite ?>/achacara/salva-item" enctype="multipart/form-data">                        
                    	<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Ícone</label>

                           <div class="col-sm-10">
                                <input type="file" name="icone" id="file" class="inputfile inputfile-1" />
                                <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Valor</label>
                            <div class="col-sm-10">
                            	<input type="number" class="form-control form-number" id="valor" name="valor" required>
                            </div>
                        </div><br>                        

                        <div class="control-group row sr-only" id="atualIcone">
                            <label class="col-sm-2 control-label" align="right">Icone Atual</label>
                            <div class="col-sm-10" id="iconeAtualLocal">
                                
                            </div>
                        </div><br>                        
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formItemChacara').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.btnEditar').click(function(event) {
                    event.preventDefault();
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url: '<?= caminhoSite ?>/achacara/dados-item/' + id,            
                        dataType: 'json',                
                    })
                    .done(function(data) {
                        // console.log("success");
                        console.log(data.titulo);
                        $('#tituloIconeBox').html('<span class="glyphicon glyphicon-font"></span>&nbsp;&nbsp; Editar Item');
                        $('#titulo').val(data.titulo);
                        $('#valor').val(data.valor);
                        $('#formItemChacara').append('<input type="hidden" name="id" id="id">');
                        $('#atualIcone').removeClass('sr-only');
                        $('.iconeAtualImg').remove();
                        $('#iconeAtualLocal').append('<img src="<?= caminhoSite ?>/uploads/' + data.icone + '" class="img-responsive iconeAtualImg">');
                        $('#id').val(data.id);
                        // $(document).scrollTop($('#formItemChacara').scrollTop());
                        

                        $('.conteudo').scrollTop(
                            $('#formItemChacara').offset().top - $('.conteudo').offset().top + $('.conteudo').scrollTop()
                        );

                        // Or you can animate the scrolling:
                        $('.conteudo').animate({
                            scrollTop: $('#formItemChacara').offset().top - $('.conteudo').offset().top + $('.conteudo').scrollTop()
                        })
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
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

