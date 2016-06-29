<?php
    // $table = $_SESSION['parametrosView'];
    $caracteristicas = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;Motos - Adicionar característica</h1>
            <h4 class="sub-title">Adicionar nova característica.</h4>
            
            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nova característica</h3>
                </div>
                <div class="box-content">
                    <!-- <form id="nome" method="método/tipo" action="caminho/pasta/url" enctype="#"> -->
                    <form id="formNovaCaracteristica" method="post" action="<?= caminhoSite ?>/motos/salvar-caracteristica" enctype="multipart/form-data">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Característica</label>
                            <div class="col-sm-10">
                                <input type="text" id="inputCaracteristica" class="form-control" name="caracteristica">
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            
            <button type="button" onclick="document.getElementById('formNovaCaracteristica').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Características</h3>
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
            </div>
        </section>
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-busca-info").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?= caminhoSite ?>/motos/buscar-caracteristicas/' + id,
                dataType: 'json',
            })
            .done(function(data) {
                $('#formNovaCaracteristica').append('<input type="hidden" name="id" id="id">');
                $('#id').val(data.id);
                $('#inputCaracteristica').val(data.caracteristica);
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