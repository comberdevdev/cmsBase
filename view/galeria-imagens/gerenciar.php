<?php
    $fotos = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-th-list"></span>&nbsp;Gerenciar galeria</h1>
            <h4 class="sub-title">Gerencie a Galeria de Imagens.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Painel de Categorias</h3>
                </div>
                <div class="box-content">
                	<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            	<tr>
                                    <th>&nbsp;</th>
                                    <th>Título da categoria</th>                                    
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if (!empty($fotos)) {
                                        foreach ($fotos as $foto): 
                                            $result = extractNameExtFile($foto->foto);
                                ?>
                                    <tr>
                                        <td>
                                            <div class="col-xs-12">
                                                <a href="#" class="thumbnail">
                                                    <img src="<?= caminhoSite ?>/uploads/<?= $result[0] . '_250x250.' . $result[1] ?>" alt="">
                                                </a>
                                            </div>                                            
                                        </td>
                                        <td><?= $foto->titulo ?></td>
                                        <td>
                                        	<center>
                                                <a href="<?= caminhoSite ?>/galeria/excluir-foto/<?= $foto->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                } ?>                                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>