<?php
	include_once caminhoFisico . "/orm/SimpleOrm.class.php";
	include_once caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);
	
	class Google_Analytics extends SimpleOrm {
		protected static
      $table = 'google_analytics';
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