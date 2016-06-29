<?php 
	session_start();
	$caminhoSite = 'http://www.comberweb.com.br/peppers/motoclub1903/cms';
  	$caminhoFisico = getcwd();

	define('caminhoSite', $caminhoSite);
	define('caminhoFisico', $caminhoFisico);
	define('bancoDeDados', 'pbeber2013_cms');
	define('logoEmpresa', caminhoSite . '/images/logo/logo-empresa.png');
	
	$title = 'CMS Padrão';
	define('title', 'CMS ');
	
	$_SESSION['meses'] = array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Marco',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Nov' => 'Novembro',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Dec' => 'Dezembro'
    );
	$_SESSION['dias_da_semana'] = array(
        'Sun' => 'Domingo', 
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );
	
?>