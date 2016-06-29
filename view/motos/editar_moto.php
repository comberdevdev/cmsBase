<?php
    $moto = $_SESSION['parametrosView'];
    $caracteristicas = $_SESSION['parametrosView'];
    $acessorios = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <form id="formEditaMoto" method="post" action="<?= caminhoSite ?>/motos/salvarEdicao" enctype="multipart/form-data">
            <h1><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;Moto - Editar moto</h1>
            <h4 class="sub-title">Editar moto.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Editar moto</h3>
                </div>
                <div class="box-content">
                    <input type="hidden" name="id" value="<?= $moto->id ?>">
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Imagem Destaque</label>

                       <div class="col-sm-10">
                            <img src="<?= caminhoSite ?>/uploads/<?= $moto->img_destaque ?>" class="img-responsive">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">&nbsp;</label>

                        <div class="col-sm-10">
                            <input type="file" name="img_destaque" id="destaque" class="inputfile inputfile-1"/>
                            <label for="destaque"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" value="<?= $moto->nome ?>">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slug" value="<?= $moto->slug ?>">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Preço</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" name="preco" value="<?= $moto->preco ?>">
                            </div>
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Vídeo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="video" value="<?= $moto->video ?>">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Descrição</label>
                        <div class="col-sm-10">
                            <textarea name="descricao" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"><?= $moto->descricao ?></textarea>
                        </div>
                    </div><br>
                </div>
            </div><br>

            <!-- <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-paint-brush" aria-hidden="true"></i>&nbsp;&nbsp;Características</h3>
                </div>
                <div class="box-content">
                    <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Caracteristica</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($caracteristicas as $caracteristica) {
                                ?>                                        
                                    <tr>
                                        <td>
                                            <?= $caracteristica->caracteristica ?>
                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn-busca-info" data-id="<?= $caracteristica->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="<?= caminhoSite ?>/motos/excluir-caracteristica/<?= $caracteristica->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
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
            </div><br>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Acessórios</h3>
                </div>
                <div class="box-content">
                    <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Acessório</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($acessorios as $acessorio) {
                                ?>                                        
                                    <tr>
                                        <td>
                                            <?= $acessorio->acessorio ?>
                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn-busca-info" data-id="<?= $acessorio->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="<?= caminhoSite ?>/motos/excluir-acessorio/<?= $acessorio->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
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
            </div><br> -->

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Galeria de imagens</h3>
                </div>
                <div class="box-content">
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Imagens</label>

                       <div class="col-sm-10">
                            <input type="file" name="fotos[]" id="galeria" class="inputfile inputfile-1" data-multiple-caption="{count} arquivos selecionados" multiple/>
                            <label for="galeria"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                        </div>
                    </div><br>
                    <?php
                        if (!empty($moto->fotos)) {
                    ?>                        
                    <div class="control-group row" id="fotos-atuais">
                        <label class="col-sm-2 control-label" align="right">Remover Fotos</label>

                        <div class="col-sm-10">
                            <a href="<?= $moto->id ?>" id="remove-fotos"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Remover Todas</button></a>
                            <br>
                            <br>
                            <?php
                                $fotos = json_decode($moto->fotos);
                                foreach ($fotos as $foto) {
                                    $result = extractNameExtFile($foto);
                            ?>
                                    <!-- <img src="<?= caminhoSite ?>/uploads/<?= $foto ?>" class="img-responsive"> -->
                                    <div class="col-xs-4" style="margin-left:-15px;">
                                        <br>
                                        <img src="<?= caminhoSite ?>/uploads/<?= $result[0] . '_250x250.' . $result[1] ?>" alt="" class="img-thumbnail">
                                        <a data-id="<?= $moto->id ?>" data-nome="<?= $foto ?>" class="removeFoto"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Remover Imagem</button></a>
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

            <button type="button" onclick="document.getElementById('formEditaMoto').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>
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
                url: '<?= caminhoSite ?>/motos/remover-fotos/' + id,                                                                
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
                url: '<?= caminhoSite ?>/motos/remove-foto/' + id + '/' + nome_imagem + '/',
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