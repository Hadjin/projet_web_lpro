<?php
    try {
	$connexion= new PDO("mysql:host=localhost; dbname=lpro",
			"lpro", "lpro2016");					
    } catch (PDOException $e) {
        echo("Erreur lors de la connexion".$e->getMessage() );
    }
?>
