<?php

/* lie les nouvelles variables dans la base de donnée my sql*/

try {

	$bdd = new PDD('mysql:host:localhost;dbname:ploploplop','root','root');
}

catch(PDOException $e){

	echo "Echec de connexion: " . $e->getMessage();	
}