<?php
    $slides = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Página Inicial - Gerenciar slides</h1>
            <h4 class="sub-title">Gerenciar slides da página inicial.</h4>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Slides <button type="button" id="btnSalvaOrdem" class="btn btn-success sr-only">Salvar Ordem</button></h3>
                </div>
                <div class="box-content">
                    <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ordem</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Link</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($slides)) {
                                        foreach ($slides as $slide) {
                                            ?>
                                            <tr class="slide" data-id="<?= $slide->id ?>">
                                                <td>
                                                    <?= $slide->ordem ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if(!empty($slide->imagem)){
                                                    ?>
                                                    <img src="<?= caminhoSite ?>/uploads/<?= $slide->imagem ?>"
                                                         class="img-responsive">
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td><?= $slide->titulo ?></td>
                                                <td><?= $slide->link ?></td>
                                                <td>
                                                    <center>
                                                        <a href="<?= caminhoSite ?>/pagina-inicial/editar-slide/<?= $slide->id ?>">
                                                            <button type="button" class="btn btn-default btn-editar">
                                                                <span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar
                                                            </button>
                                                        </a>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <a href="<?= caminhoSite ?>/pagina-inicial/deletar-slide/<?= $slide->id ?>"
                                                           class="btnDelete">
                                                            <button type="button" class="btn btn-default btn-excluir">
                                                                <span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir
                                                            </button>
                                                        </a>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php
                                        }
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
<script type="text/javascript">
    $(document).ready(function() {
        // Return a helper with preserved width of cells  
        var fixHelper = function(e, ui) {  
            ui.children().each(function() {  
                $(this).width($(this).width());  
            });  
            return ui;  
        };
        
        $("#example tbody").sortable({  
            helper: fixHelper  
        }).disableSelection();

        $( "#example tbody" ).on( "sortchange", function( event, ui ) {
            if ($("#btnSalvaOrdem").hasClass('sr-only')) {
                $("#btnSalvaOrdem").removeClass('sr-only');
            }
        } );

        $('#btnSalvaOrdem').click(function(event) {
            var cont = 1;
            var ordem = [];
            $('.slide').each(function(index, el) {
                ordem[cont] = $(this).attr('data-id');
                cont++;
            });
            $.ajax({
                url: '<?= caminhoSite ?>/pagina-inicial/salva-ordem',
                type: 'POST',                
                data: {ordens: ordem},
            })
            .done(function(data) {
                console.log("success");            
                console.log(data);
                location.reload();
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