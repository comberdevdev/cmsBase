<?php
    $caracteristicas = $_SESSION['parametrosView']['caracteristicas'];
    $acessorios = $_SESSION['parametrosView']['acessorios'];
    // var_dump($caracteristicas);
    // var_dump($acessorios);
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <form id="formNovaMoto" method="post" action="<?= caminhoSite ?>/motos/salvar" enctype="multipart/form-data">
            <h1><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;Motos - Adicionar moto</h1>
            <h4 class="sub-title">Adicionar nova moto.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova moto</h3>
                </div>
                <div class="box-content">
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Nome</label>
                        <div class="col-sm-10">
                        	<input type="text" class="form-control" name="nome">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slug">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Preço</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" name="preco">
                            </div>
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Imagem Destaque</label>

                        <div class="col-sm-10">
                            <input type="file" name="img_destaque" id="destaque" class="inputfile inputfile-1" required/>
                            <label for="destaque"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Vídeo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="video">
                        </div>
                    </div><br>

                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Descrição</label>
                        <div class="col-sm-10">
                            <textarea name="descricao" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"></textarea>
                        </div>
                    </div><br>
                </div>
            </div>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Características</h3>
                </div>
                <div class="box-content">
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                        <div class="col-sm-4">
                            <select id="selectCaracteristica" class="form-control" name="id_caracteristica">
                                <option selected value="">Selecione a característica</option>
                                <?php foreach ($caracteristicas as $caracteristica): ?>
                                    <option value="<?= $caracteristica->id ?>"><?= $caracteristica->caracteristica ?></option>                                        
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="valorCaracteristica" placeholder="valor">
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="btnSalvaCaracteristica" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                        </div><br>

                        <div class="col-sm-2">&nbsp;</div>
                        <div class="col-sm-10 pull-right">
                            <table class="table table-striped" id="tblCaracteristicas">
                                <thead>
                                    <tr>
                                        <th>Característica</th>
                                        <th>Valor</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>
            </div>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Acessórios</h3>
                </div>
                <div class="box-content">
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                        <div class="col-sm-4">
                            <select id="selectAcessorio" class="form-control" name="id_acessorio">
                                <option selected value="">Selecione o acessório</option>
                                <?php foreach ($acessorios as $acessorio): ?>
                                    <option value="<?= $acessorio->id ?>"><?= $acessorio->acessorio ?></option>                                        
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="valorAcessorio" placeholder="valor">
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="btnSalvaAcessorio" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                        </div>

                        <div class="col-sm-2">&nbsp;</div>
                        <div class="col-sm-10 pull-right">
                            <table class="table table-striped" id="tblAcessorio">
                                <thead>
                                    <tr>                                        
                                        <th>Acessório</th>
                                        <th>Valor</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>
            </div>

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
            <button type="button" id="btnSalvarMoto" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#btnSalvaCaracteristica').click(function(event) {
            /* Act on the event */
            var id = $('#selectCaracteristica').val();
            var caracteristica = $("#selectCaracteristica option:selected").text();
            var valor = $("#valorCaracteristica").val();
            var registro = '<tr><td data-id="' +  id + '" class="caracteristicaNome">' + caracteristica + 
                '</td><td class="valorCarac">' + valor + '</td><td><center><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblCaracteristicas tbody').append(registro);
            console.log(registro);
        });

        $('#btnSalvaAcessorio').click(function(event) {
            /* Act on the event */
            var id = $('#selectAcessorio').val();
            var acessorio = $("#selectAcessorio option:selected").text();
            var valor = $("#valorAcessorio").val();
            var registro = '<tr><td data-id="' +  id + '" class="acessorioNome">' + acessorio + 
                '</td><td class="valorAcesso">' + valor + '</td><td><center><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblAcessorio tbody').append(registro);
            console.log(registro);
        });

        $('#btnSalvarMoto').click(function(event) {
            /* Act on the event */
            var itensCaracteristicas = '"itens":[';

            // each = função para 'percorrer' todos os elementos do seletor
            $('#tblCaracteristicas tbody tr').each(function(index, el) {                 
                var idCaracteristica = $(this).find('.caracteristicaNome').attr('data-id');
                var valorCaracteristica = $(this).find('.valorCarac').text();
                
                itensCaracteristicas = itensCaracteristicas + 
                        '{"idCaracteristica":"' + idCaracteristica + '", "valorCaracteristica":"' + valorCaracteristica + '"},';
            });
            itensCaracteristicas = itensCaracteristicas + ']';

            console.log(itensCaracteristicas);
            $.ajax({
                url: '<?= caminhoSite ?>/javaScript/arrayJavaScript',
                type: 'POST',
                data: {param: itensCaracteristicas},
            })
            .done(function(data) {
                console.log("success");
                console.log(data);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
            
            $('#tblAcessorio tbody tr').each(function(index, el) {
                
            });
        });
    });
</script>