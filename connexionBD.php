<?php
    try {
	$connexion= new PDO("mysql:host=localhost; dbname=lpro",
			"lpro", "lpro2016",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));					
    } catch (PDOException $e) {
        echo("Erreur lors de la connexion".$e->getMessage() );
    }
?>
