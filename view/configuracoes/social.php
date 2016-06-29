<?php
    $configuracoes = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><span class="glyphicon glyphicon-globe"></span>&nbsp;Redes Sociais</h1>
            <h4 class="sub-title">Gerenciar as redes sociais.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-cloud"></span>&nbsp;&nbsp;Redes sociais</h3>
                </div>
                <div class="box-content">
                    <?php
                        if (!empty($_SESSION['sucesso'])) {
                            if ($_SESSION['sucesso'] == 'S') {
                    ?>
                                <script type="text/javascript">
                                    swal("Pronto!", "Alterações gravadas com sucesso!", "success");
                                </script>
                    <?php
                            } else {
                    ?>
                                <script type="text/javascript">
                                    swal("Erro!", "Não foi possível salvar as alterações!", "error");
                                </script>
                    <?php
                            }
                            unset($_SESSION['sucesso']);
                        }
                    ?>
                	<form id="formRedes" method="post" action="<?= caminhoSite ?>/redes-sociais/salvar">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right"></label>
                            <div class="col-sm-10">
                            	<div class="row">
                                    <div class="col-sm-1">
                                        <img src="<?= caminhoSite ?>/images/social-icons/fa-ico.png" class="img-social">&nbsp;&nbsp;
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control form-social" placeholder="https://www.facebook.com/" value="<?= $configuracoes->facebook ?>" name="facebook"><br><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-1">
                                        <img src="<?= caminhoSite ?>/images/social-icons/in-ico.png" class="img-social">&nbsp;&nbsp;
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control form-social" placeholder="https://www.instagram.com/" value="<?= $configuracoes->instagram ?>" name="instagram"><br><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-1">
                                        <img src="<?= caminhoSite ?>/images/social-icons/tw-ico.png" class="img-social">&nbsp;&nbsp;
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control form-social" placeholder="https://twitter.com/" value="<?= $configuracoes->twitter ?>" name="twitter"><br><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-1">
                                        <img src="<?= caminhoSite ?>/images/social-icons/go-ico.png" class="img-social">&nbsp;&nbsp;
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control form-social" placeholder="https://plus.google.com/" value="<?= $configuracoes->google_plus ?>" name="google_plus"><br><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-1">
                                        <img src="<?= caminhoSite ?>/images/social-icons/yu-ico.png" class="img-social">&nbsp;&nbsp;
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control form-social" placeholder="https://www.youtube.com/" value="<?= $configuracoes->youtube ?>" name="youtube"><br><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-1">
                                        <img src="<?= caminhoSite ?>/images/social-icons/vi-ico.png" class="img-social">&nbsp;&nbsp;
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control form-social" placeholder="https://vimeo.com/" value="<?= $configuracoes->vimeo ?>" name="vimeo"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div><br>
            <button type="button" onclick="document.getElementById('formRedes').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>
        
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>