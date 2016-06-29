<?php
    $captcha = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-lock"></span>&nbsp;reCAPTCHA</h1>
            <h4 class="sub-title">Adicionando reCAPTCHA para o seu site.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;CAPTCHA</h3>
                </div>
                <div class="box-content">
                	<form id="formReCaptcha" method="post" action="<?= caminhoSite ?>/google/salvar-captcha">
                        <!-- reCAPTCHA -->
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Site Key</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="site_key" value="<?= $captcha->site_key ?>" required>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Secret Key</label>
                            <div class="col-sm-10">
                            	<input type="text" class="form-control" name="secret_key" value="<?= $captcha->secret_key ?>" required>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formReCaptcha').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>