<body style="background-color:#d9d9d9">
	<div class="fluid">
    	<section>
            <nav class="navbar navbar-fixed-top collapse navbar-collapse" role="navigation">
                <div class="fluid">
                    <div class="navbar-header navbar-cabecalho">
                    	<a href="<?= caminhoSite ?>/home">
                        	<div class="logo">
                                <img src="<?= caminhoSite ?>/images/logo/logo-peppers.png" class="img-responsive pull-left logo-cms-img">
                            </div>
                        </a>
                    </div>
                    
                    <div class="collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                            	<a href="#" onClick="perfil()" id="iconeComberweb">
                                    <img src="<?= logoEmpresa ?>" class="img-circle">
                                </a>
                            </li>
                        </ul>
                	</div>
            	</div>
            </nav>
        </section>
        
        <section>
        	<div id="wrapper">
                <div id="sidebar-wrapper" style="background-color:#17181b">
                	<ul class="lista">
                    	<li class="item <?php if($_SESSION['paginaAtual'] == 'pagina-inicial/gerenciar') echo "menu-active-side" ?>">
                        	<a href="#" class="menu-item-side"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Página inicial
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens <?php if($_SESSION['paginaAtual'] == 'pagina-inicial/gerenciar') echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_page" name="config_page">
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/pagina-inicial/gerenciar-slides">Gerenciar Slides</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/pagina-inicial/novo-slide">Adicionar novo slide</a>
                            </li>
                        </ul>
                        
                        <li class="item <?php if($_SESSION['paginaAtual'] == 'harley/harley') echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/harley-davidson-curitiba/gerenciar-dados"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;Harley Davidson Curitiba
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

                        <li class="item <?php if($_SESSION['paginaAtual'] == 'motos/geral') echo "menu-active-side" ?>">
                            <a href="#" class="menu-item-side"><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;&nbsp;Motos
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens  <?php if($_SESSION['paginaAtual'] == 'motos/geral') echo "menu-open-side"; else echo "menu-close-side"; ?>">
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/motos/listar">Gerenciar motos</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/motos/novo">Adicionar nova moto</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/motos/nova-caracteristica">Gerenciar características</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/motos/novo-acessorio">Gerenciar acessórios</a>
                            </li>
                        </ul>
                        
                        <li class="item <?php if($_SESSION['paginaAtual'] == 'formulario/gerenciar') echo "menu-active-side" ?>">
                        	<a href="#" class="menu-item-side"><i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;Formulários
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens <?php if($_SESSION['paginaAtual'] == 'formulario/gerenciar') echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/formulario/contatos">Contatos</a>
                            </li>
                        </ul>
                        
                        <li class="item <?php if($_SESSION['paginaAtual'] == 'google/gerenciar') echo "menu-active-side" ?>">
                        	<a href="#" class="menu-item-side"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Google
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens <?php if($_SESSION['paginaAtual'] == 'google/gerenciar') echo "menu-open-side"; else echo "menu-close-side"; ?>">
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/google/dados-analytics">Analytics</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/google/recaptcha">reCAPTCHA</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/google/seo">SEO</a>
                            </li>
                        </ul>
                        
                        <li class="item <?php if($_SESSION['paginaAtual'] == 'configuracoes/geral') echo "menu-active-side" ?>">
                        	<a href="#" class="menu-item-side"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sr-only">Loading...</span>&nbsp;&nbsp;Configurações
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens  <?php if($_SESSION['paginaAtual'] == 'configuracoes/geral') echo "menu-open-side"; else echo "menu-close-side"; ?>">
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/configuracoes-gerais/editar">Configurações gerais</a>
                            </li>
                            <li class="sub-item">
                                <a href="<?= caminhoSite ?>/redes-sociais/editar">Redes sociais</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                
                <div class="perfil-lateral">
                	<div id="content-perfil">
                       <div id="usuarioLogado">
                           <h5><strong>Usuário</strong>: <?= $_SESSION['usuNome'] ?></h5>
                       </div>
                       
                       <ul class="list-unstyled">
                        <li class="menu-perfil-item" style="margin-bottom:-10px; margin-top:15px;">
                            <a href="<?= caminhoSite ?>/logout"><p class="perfil-item-primario"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Sair</p></a>
                        </li>
                    </ul>
                    
                </div>
            </div>
                
            
            </div>
        </section>