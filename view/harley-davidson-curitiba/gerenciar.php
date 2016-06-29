<?php
    $harley = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Harley Davidson Curitiba</h1>
            <h4 class="sub-title">Gerenciar conteúdo.</h4>
            
            <form id="formIntroducao" method="post" action="<?= caminhoSite ?>/harley-davidson-curitiba/atualizar-dados" enctype="multipart/form-data">
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;&nbsp;Banner</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Imagem</label>
                            <div class="col-sm-10">
                                <?php
                                    if (!empty($harley->banner)) {
                                ?>
                                        <img src="<?= caminhoSite ?>/uploads/<?= $harley->banner ?>" class="img-responsive">
                                <?php
                                    }
                                ?><br><br>

                                <input type="file" name="banner" id="banner" class="inputfile inputfile-1" />
                                <label for="banner"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label></path>
                            </div>
                        </div><br>
                    </div>
                </div><br>

                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><i class="fa fa-desktop" aria-hidden="true"></i>&nbsp;&nbsp;Introdução</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título (H2)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_introducao" value="<?= $harley->titulo_introducao ?>">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 1</label>
                            <div class="col-sm-10">
                                <textarea name="texto_primario" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $harley->texto_primario ?>
                                </textarea>
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto 2</label>
                            <div class="col-sm-10">
                                <textarea name="texto_secundario" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $harley->texto_secundario ?>
                                </textarea>
                            </div>
                        </div><br>
                    </div>
                </div><br>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-refresh fa-spin fa-fw"></i><span class="sr-only">Loading...</span>&nbsp;&nbsp;Tour 360º</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Imagem de fundo</label>
                            <div class="col-sm-10">
                                <?php
                                    if (!empty($harley->img_fundo)) {
                                ?>
                                        <img src="<?= caminhoSite ?>/uploads/<?= $harley->img_fundo ?>" class="img-responsive">
                                <?php
                                    }
                                ?><br><br>

                                <input type="file" name="img_fundo" id="img_fundo" class="inputfile inputfile-1" />
                                <label for="img_fundo"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label></path>
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Selo Tour 360</label>
                            <div class="col-sm-10">
                                <?php
                                    if (!empty($harley->img_logo)) {
                                ?>
                                        <img src="<?= caminhoSite ?>/uploads/<?= $harley->img_logo ?>" class="img-responsive">
                                <?php
                                    }
                                ?><br><br>

                                <input type="file" name="img_logo" id="img_logo" class="inputfile inputfile-1" />
                                <label for="img_logo"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label></path>
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tour_texto" value="<?= $harley->tour_texto ?>">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tour_link" value="<?= $harley->tour_link ?>">
                            </div>
                        </div><br>
                    </div>
                </div><br>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Conteúdo</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título (H1)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo" value="<?= $harley->titulo ?>">
                            </div>
                        </div><br>
                        
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto (H2)</label>
                            <div class="col-sm-10">
                                <textarea name="conteudo" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10">
                                    <?= $harley->conteudo ?>
                                </textarea>
                            </div>
                        </div><br>
                    </div>
                </div><br>
            </form>

            <button type="button" onclick="document.getElementById('formIntroducao').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
        </section>

        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

