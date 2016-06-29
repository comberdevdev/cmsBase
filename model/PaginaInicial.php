<?php
	include caminhoFisico . "/orm/SimpleOrm.class.php";
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);
	
	class Pagina_Inicial_Slides extends SimpleOrm {
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