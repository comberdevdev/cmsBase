<?php
    $categorias = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-plus"></span>&nbsp;Adicionar Categoria</h1>
            <h4 class="sub-title">Adicione uma nova categoria.</h4>
            
            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Categorias</h3>
                </div>
                <div class="box-content">
                    <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <!-- <th><center>Destaque</center></th> -->
                                    <th>Título</th>                                    
                                    <!-- <th>&nbsp;</th> -->
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($categorias as $categoria) {
                                ?>                                
                                <tr>
                                    <!-- <td>
                                        <center>
                                            <div class="checkbox">
                                                <label><input name="check" id="check" type="checkbox" value=""></label><br>
                                            </div>
                                        </center>
                                    </td> -->
                                    <td><?= $categoria->titulo ?></td>                                    
                                    <!-- <td>
                                        <center>
                                             <a href="<?= $categoria->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                        </center>
                                    </td> -->
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/galeria/excluir-categoria/<?= $categoria->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
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
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Categoria</h3>
                </div>
                <div class="box-content">
                	<form id="formCateg" method="post" action="<?= caminhoSite ?>/galeria/salvar-categoria">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="titulo">
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formCateg').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>