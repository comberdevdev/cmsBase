<?php
	//Usuarios
	$prefixos['usuarios']['login'] =  array('Controller' => 'UsuariosController', 'Method' => 'login', 'logado' => false);
	$prefixos['usuarios']['faz_login'] =  array('Controller' => 'UsuariosController', 'Method' => 'faz_login', 'logado' => false);

	//Pagina Inicial
	$prefixos['pagina-inicial']['novo-slide'] = array('Controller' => 'PaginaInicialController', 'Method' => 'novo_slide', 'logado' => true);
	$prefixos['pagina-inicial']['salvar-slide'] = array('Controller' => 'PaginaInicialController', 'Method' => 'salvar', 'logado' => true);
	$prefixos['pagina-inicial']['editar-slide'] = array('Controller' => 'PaginaInicialController', 'Method' => 'editar_slide', 'logado' => true);
	$prefixos['pagina-inicial']['salvar-editar'] = array('Controller' => 'PaginaInicialController', 'Method' => 'salvar_edicao', 'logado' => true);
	$prefixos['pagina-inicial']['deletar-slide'] = array('Controller' => 'PaginaInicialController', 'Method' => 'deletar_slide', 'logado' => true);
	$prefixos['pagina-inicial']['gerenciar-slides'] = array('Controller' => 'PaginaInicialController', 'Method' => 'gerenciar_slides', 'logado' => true);
	$prefixos['pagina-inicial']['salva-ordem'] = array('Controller' => 'PaginaInicialController', 'Method' => 'salva_ordem', 'logado' => true);
	
	//A Chacara
	$prefixos['achacara']['dados'] = array('Controller' => 'AChacaraController', 'Method' => 'dados', 'logado' => true);
	$prefixos['achacara']['salva-introducao'] = array('Controller' => 'AChacaraController', 'Method' => 'salva_introducao', 'logado' => true);
	$prefixos['achacara']['salva-dados'] = array('Controller' => 'AChacaraController', 'Method' => 'salva_dados', 'logado' => true);
	$prefixos['achacara']['salva-item'] = array('Controller' => 'AChacaraController', 'Method' => 'salva_item', 'logado' => true);
	$prefixos['achacara']['deletar-item'] = array('Controller' => 'AChacaraController', 'Method' => 'deleta_item', 'logado' => true);
	$prefixos['achacara']['dados-item'] = array('Controller' => 'AChacaraController', 'Method' => 'dados_item', 'logado' => true);
	
	// Alojamentos
	$prefixos['meus-alojamentos']['gerenciar'] = array('Controller' => 'AlojamentoController', 'Method' => 'gerenciar', 'logado' => true);
	$prefixos['meus-alojamentos']['novo-alojamento'] = array('Controller' => 'AlojamentoController', 'Method' => 'novo_alojamento', 'logado' => true);
	$prefixos['meus-alojamentos']['editar-alojamento'] = array('Controller' => 'AlojamentoController', 'Method' => 'editar_alojamento', 'logado' => true);
	$prefixos['meus-alojamentos']['salvar-alojamento'] = array('Controller' => 'AlojamentoController', 'Method' => 'salvar_alojamento', 'logado' => true);
	$prefixos['meus-alojamentos']['salvar-edicao-alojamento'] = array('Controller' => 'AlojamentoController', 'Method' => 'salvar_edicao_alojamento', 'logado' => true);
	$prefixos['meus-alojamentos']['deleta-alojamento'] = array('Controller' => 'AlojamentoController', 'Method' => 'deleta_alojamento', 'logado' => true);
	$prefixos['meus-alojamentos']['remover-fotos'] = array('Controller' => 'AlojamentoController', 'Method' => 'remover_fotos', 'logado' => true);
	$prefixos['meus-alojamentos']['remove-foto'] = array('Controller' => 'AlojamentoController', 'Method' => 'remove_foto', 'logado' => true);
	
	// Galeria de Imagens
	$prefixos['galeria']['gerenciar-pagina'] = array('Controller' => 'GaleriaController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['galeria']['salvar-pagina'] = array('Controller' => 'GaleriaController', 'Method' => 'salva_pagina', 'logado' => true);
	$prefixos['galeria']['categorias'] = array('Controller' => 'GaleriaController', 'Method' => 'add_categoria', 'logado' => true);
	$prefixos['galeria']['salvar-categoria'] = array('Controller' => 'GaleriaController', 'Method' => 'salvar_categoria', 'logado' => true);
	$prefixos['galeria']['excluir-categoria'] = array('Controller' => 'GaleriaController', 'Method' => 'excluir_categoria', 'logado' => true);
	$prefixos['galeria']['adicionar-fotos'] = array('Controller' => 'GaleriaController', 'Method' => 'adicionar_fotos', 'logado' => true);
	$prefixos['galeria']['salvar-fotos'] = array('Controller' => 'GaleriaController', 'Method' => 'salvar_fotos', 'logado' => true);
	$prefixos['galeria']['excluir-foto'] = array('Controller' => 'GaleriaController', 'Method' => 'excluir_foto', 'logado' => true);
	$prefixos['galeria']['gerenciar-fotos'] = array('Controller' => 'GaleriaController', 'Method' => 'gerenciar_fotos', 'logado' => true);
	
	// Formularios
	$prefixos['formulario']['contatos'] = array('Controller' => 'FormularioController', 'Method' => 'contatos', 'logado' => true);
	$prefixos['formulario']['excluir-contato'] = array('Controller' => 'FormularioController', 'Method' => 'excluir_contato', 'logado' => true);
	
	//Google
	$prefixos['google']['recaptcha'] = array('Controller' => 'GoogleController', 'Method' => 'recaptcha', 'logado' => true);
	$prefixos['google']['salvar-captcha'] = array('Controller' => 'GoogleController', 'Method' => 'salvar_captcha', 'logado' => true);
	$prefixos['google']['seo'] = array('Controller' => 'GoogleController', 'Method' => 'seo', 'logado' => true);
	$prefixos['google']['seo-busca'] = array('Controller' => 'GoogleController', 'Method' => 'seo_busca', 'logado' => true);
	$prefixos['google']['salvar-seo'] = array('Controller' => 'GoogleController', 'Method' => 'salvar_seo', 'logado' => true);
	$prefixos['google']['dados-analytics'] = array('Controller' => 'GoogleController', 'Method' => 'dados_analytics', 'logado' => true);
	$prefixos['google']['salvar-analytics'] = array('Controller' => 'GoogleController', 'Method' => 'salva_analytics', 'logado' => true);

	//Configuracoes Gerais
	$prefixos['configuracoes-gerais']['editar'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'editar', 'logado' => true);
	$prefixos['configuracoes-gerais']['salvar'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'salvar', 'logado' => true);
	$prefixos['redes-sociais']['editar'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'editar_redes_sociais', 'logado' => true);
	$prefixos['redes-sociais']['salvar'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'salvar_redes_sociais', 'logado' => true);

	// Motos
	$prefixos['motos']['listar'] = array('Controller' => 'MotosController', 'Method' => 'listar', 'logado' => true);
	$prefixos['motos']['editar'] = array('Controller' => 'MotosController', 'Method' => 'editar', 'logado' => true);
	$prefixos['motos']['salvarEdicao'] = array('Controller' => 'MotosController', 'Method' => 'salvarEdicao', 'logado' => true);
	$prefixos['motos']['excluir'] = array('Controller' => 'MotosController', 'Method' => 'excluir', 'logado' => true);
	$prefixos['motos']['salvar'] = array('Controller' => 'MotosController', 'Method' => 'salvar', 'logado' => true);
	$prefixos['motos']['novo'] = array('Controller' => 'MotosController', 'Method' => 'novo', 'logado' => true);
	$prefixos['motos']['remover-fotos'] = array('Controller' => 'MotosController', 'Method' => 'remover_fotos', 'logado' => true);
	$prefixos['motos']['remove-foto'] = array('Controller' => 'MotosController', 'Method' => 'remove_foto', 'logado' => true);
	
	// Motos - características
	$prefixos['motos']['nova-caracteristica'] = array('Controller' => 'MotosController', 'Method' => 'nova_caracteristica', 'logado' => true);
	$prefixos['motos']['salvar-caracteristica'] = array('Controller' => 'MotosController', 'Method' => 'salvar_caracteristica', 'logado' => true);
	$prefixos['motos']['buscar-caracteristicas'] = array('Controller' => 'MotosController', 'Method' => 'buscar_caracteristicas', 'logado' => true);
	$prefixos['motos']['editar-caracteristica'] = array('Controller' => 'MotosController', 'Method' => 'editar_caracteristica', 'logado' => true);
	$prefixos['motos']['salvar-edicao-caracteristica'] = array('Controller' => 'MotosController', 'Method' => 'salvar_edicao_caracteristica', 'logado' => true);
	$prefixos['motos']['excluir-caracteristica'] = array('Controller' => 'MotosController', 'Method' => 'excluir_caracteristica', 'logado' => true);

	// Motos - acessórios
	$prefixos['motos']['novo-acessorio'] = array('Controller' => 'MotosController', 'Method' => 'novo_acessorio', 'logado' => true);
	$prefixos['motos']['salvar-acessorio'] = array('Controller' => 'MotosController', 'Method' => 'salvar_acessorio', 'logado' => true);
	$prefixos['motos']['buscar-acessorios'] = array('Controller' => 'MotosController', 'Method' => 'buscar_acessorios', 'logado' => true);
	$prefixos['motos']['editar-acessorio'] = array('Controller' => 'MotosController', 'Method' => 'editar_acessorio', 'logado' => true);
	$prefixos['motos']['salvar-edicao-acessorio'] = array('Controller' => 'MotosController', 'Method' => 'salvar_edicao_acessorio', 'logado' => true);
	$prefixos['motos']['excluir-acessorio'] = array('Controller' => 'MotosController', 'Method' => 'excluir_acessorio', 'logado' => true);

	// Harley Davidson Curitiba
	$prefixos['harley-davidson-curitiba']['gerenciar-dados'] = array('Controller' => 'HarleyController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['harley-davidson-curitiba']['atualizar-dados'] = array('Controller' => 'HarleyController', 'Method' => 'atualizar_dados', 'logado' => true);
	

	$prefixos['javaScript']['arrayJavaScript'] = array('Controller' => 'TesteController', 'Method' => 'testeJavaScript', 'logado' => false);

	$routes['teste'] = array('Controller' => 'TesteController', 'Method' => 'teste', 'logado' => false);
	$routes['senha'] = array('Controller' => 'TesteController', 'Method' => 'senha', 'logado' => false);
	$routes['gerarSenha'] = array('Controller' => 'TesteController', 'Method' => 'gerarSenha', 'logado' => false);
	$routes['comparaSenha'] = array('Controller' => 'TesteController', 'Method' => 'comparaSenha', 'logado' => false);
	$routes['verificaSenha'] = array('Controller' => 'TesteController', 'Method' => 'verificaSenha', 'logado' => false);

	$routes['home'] = array('Controller' => 'HomeController', 'Method' => 'index', 'logado' => true);
	$routes['nao-logado'] = array('Controller' => 'UsuariosController', 'Method' => 'nao_logado', 'logado' => false);
	$routes['logout'] = array('Controller' => 'UsuariosController', 'Method' => 'logout', 'logado' => true);
	$routes['default'] = array('Controller' => 'DefaultController', 'Method' => 'index', 'logado' => true);


	// ['modulo']['funcao'] = array('Controller' => 'arquivo', 'Method' => 'funcao', 'logado' => true/false);
?>