<?php

/* lie les nouvelles variables dans la base de donnée my sql*/

try {

	$bdd = new PDO('mysql:host=localhost;dbname=ploploplop','root','jecode4bleau');
}

catch(PDOException $e){

	echo "Echec de connexion: " . $e->getMessage();	
}