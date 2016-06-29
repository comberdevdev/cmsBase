<?php
    $contatos = $_SESSION['parametrosView'];
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <h1><i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;Lista de contatos</h1>
            <h4 class="sub-title">Todos os contatos salvos.</h4>
            
            <div class="box">
            	<div class="box-title">
                	<h3 class="box-title-title"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Contatos</h3>
                </div>
                <div class="box-content">
                	<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            	<tr>
                                    <th>Email</th>
                                    <th>Assunto</th>
                                    <th><center>Detalhes</center></th>                                    
                                    <th><center>Excluir</center></th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($contatos as $item) {
                                ?>
                                <tr>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->assunto ?></td>
                                    <td>
                                    	<center>
                                    		<a data-toggle="modal" href='#modalDados_<?= $item->id ?>'><button type="button" class="btn btn-default btn-dados"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;Visualizar Dados</button></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/formulario/excluir-contato/<?= $item->id ?>" class="btnDelete"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                        </center>
                                    </td>   
                                    
                                     <div class="modal fade" id="modalDados_<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn btn-default btn-modal-close pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Email: <?= $item->email ?></h4>                                                                                                    
                                                    <hr>
                                                    <h4>Assunto: <?= $item->assunto ?></h4>
                                                    <hr>
                                                    <p><?= $item->mensagem ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                         
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

<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-default btn-modal-close pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
            </div>
            <div class="modal-body">
                <h4>Email: Teste@teste.com.br</h4>
                <hr>
                <h4>Cc: Example@Example.com</h4>
                <hr>
                <h4>Assunto: Lorem Ipsum</h4>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at finibus ipsum. Aenean pulvinar, purus sed ornare faucibus, libero sem varius velit, et imperdiet lorem orci vitae sapien. Maecenas ultricies faucibus turpis nec porttitor. Proin eleifend non magna et lacinia. Nullam a metus dapibus, finibus libero vitae, lobortis velit. Suspendisse potenti. Morbi placerat, magna ac dictum placerat, nisl ex vestibulum augue, sit amet dignissim enim dolor sit amet lectus. Ut ut purus a nibh laoreet ullamcorper. Fusce pharetra lorem at ipsum aliquam viverra. Duis convallis, mauris eu commodo aliquet, sem lacus auctor erat, sed blandit justo orci eu lectus. Curabitur ullamcorper eu lacus et lacinia.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalArquivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-default btn-modal-close pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
            </div>
            <div class="modal-body">
               <iframe src="uploads/teste.pdf" style="zoom:0.60" width="99.6%" height="1000" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>