<?php
    $motos = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;Motos - Gerenciar motos</h1>
            <h4 class="sub-title">Gerenciar motos.</h4>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Todas as motos</h3>
                </div>
                <div class="box-content">
                    <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Destaque</th>
                                    <th>Vendida</th>
                                    <th>Valor</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($motos as $moto) {
                                ?>                                        
                                        <tr>
                                            <td>
                                                <?= $moto->nome ?>                                               
                                            </td>
                                            <td><center><input type="checkbox"></center></td>
                                            <td><center><input type="checkbox"></center></td>
                                            <td>R$ <?= $moto->preco ?></td>
                                            <td>
                                                <center>
                                                    <a href="<?= caminhoSite ?>/motos/editar/<?= $moto->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="<?= caminhoSite ?>/motos/excluir/<?= $moto->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
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
<script type="text/javascript" src="<?= caminhoSite ?>/js/jquery-ui.min.js"></script>