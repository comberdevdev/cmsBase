<?php
	include_once caminhoFisico . "/orm/SimpleOrm.class.php";
	include_once caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);
	
	class Harley extends SimpleOrm {
		protected static
		$table = 'harley';
	}
?>