<?php
	include caminhoFisico . "/orm/SimpleOrm.class.php";
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);
	
	class Motos extends SimpleOrm {
		protected static
		$table = 'motos';
	}

	class Moto_Caracteristicas extends SimpleOrm {
		protected static
		$table = 'motos_caracteristicas';
	}

	class Moto_Acessorios extends SimpleOrm {
		protected static
		$table = 'motos_acessorios';
	}

	class Acessorios extends SimpleOrm {
		protected static
		$acessorios = 'acessorios';
	}

	class Caracteristicas extends SimpleOrm {
		protected static
		$caracteristicas = 'caracteristicas';
	}
?>