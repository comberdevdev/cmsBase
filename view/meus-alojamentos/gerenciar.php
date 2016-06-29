<?php
    $alojamentos = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-book"></span>&nbsp;Gerenciar Alojamentos</h1>
            <h4 class="sub-title">Gerenciar alojamentos.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Painel de alojamentos</h3>
                </div>
                <div class="box-content">
                	<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            	<tr>
                                    <!-- <th><center>Destaque</center></th> -->
                                    <th>Título</th>
                                    <th>Slug</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($alojamentos as $alojamento) {
                                ?>                                
                                <tr>
                                	<!-- <td>
                                    	<center>
                                            <div class="checkbox">
                                                <label><input name="check" id="check" type="checkbox" value=""></label><br>
                                            </div>
                                    	</center>
                                    </td> -->
                                    <td><?= $alojamento->titulo ?></td>
                                    <td><?= $alojamento->slug ?></td>
                                    <td>
                                    	<center>
                                        	 <a href="<?= caminhoSite ?>/meus-alojamentos/editar-alojamento/<?= $alojamento->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                        </center>
                                    </td>
                                    <td>
                                    	<center>
                                        	<a href="<?= caminhoSite ?>/meus-alojamentos/deleta-alojamento/<?= $alojamento->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
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