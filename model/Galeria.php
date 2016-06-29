<?php
	include_once caminhoFisico . "/orm/SimpleOrm.class.php";
	include_once caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);
	
	class Galeria_Pagina extends SimpleOrm {
		protected static
      $table = 'galeria_pagina';
	}

	class Galeria_Categoria extends SimpleOrm {
		protected static
      $table = 'galeria_categorias';
	}

	class Galeria_Fotos extends SimpleOrm {
		protected static
      $table = 'galeria_fotos';
	}
	// create some validations
	    // User::validates("name", array("presence" => true));
	    // User::validates("email", array("presence" => true));
	    // User::validates("email", array("uniqueness" => true));
	    // User::validates("id", array("numericality" => true));

    // create some relations
	    // User::hasMany("tickets");
    	// User::hasOne("account");
    	// Ticket::belongsTo("user");
?>