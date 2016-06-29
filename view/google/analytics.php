<?php
    $analytics = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp;Analytics</h1>
            <h4 class="sub-title">Adicionando Analytics para o seu site.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Analytics</h3>
                </div>
                <div class="box-content">
                	<form id="formAnalytics" method="post" action="<?= caminhoSite ?>/google/salvar-analytics">
                        <!-- reCAPTCHA -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Código UA</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="codigo_ua" value="<?= $analytics->codigo_ua ?>" required>
                            </div>
                        </div><br>                                                
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formAnalytics').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>