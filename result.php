<?php 

//var_dump($_POST);	//permet de voir ce qui il ya ds une variable

if (empty($_POST['prenom']) && empty($_POST['age'])) {

	echo 'erreur remplissez tous les champs!';
}

// htlmspecialchar permet de rendre en chaine de caractère des caractères spéciaux précaution pour ne pas interprèter du code inseré ds ton formulaire (mode piratage)

else {

	$result=[];

	foreach ($_POST as $key => $value) {
		
		$result[$key] = htlmspecialchar($value);
	}
}

var_dump($result);