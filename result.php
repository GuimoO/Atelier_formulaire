<?php 

/*//var_dump($_POST);	//permet de voir ce qui il ya ds une variable

if (empty($_POST['prenom']) && empty($_POST['age'])) { 		etc etc

	echo 'erreur remplissez tous les champs!';
}

// htlmspecialchar permet de rendre en chaine de caractère des caractères spéciaux précaution pour ne pas interprèter du code inseré ds ton formulaire (mode piratage)

else {

	$result=[];

	foreach ($_POST as $key => $value) {
		
		$result[$key] = htlmspecialchar($value);
	}
}

var_dump($result);*/

/*même chose qu'au dessus mais avec une boucle if*/




/* verifie que les champs du formulaire ne sont pas vide*/
if (
	empty($_POST['nom']) ||
	empty($_POST['prenom']) ||
	empty($_POST['age']) ||
	empty($_POST['langage'])
	){

	echo "merci de remplir tous les champs";
}


else {

	/*inclu la connexion bdd once car une seul fois*/

	include_once 'connexion_bdd.php';

	/*filtre les données du champs pour ne pas interpréter du script qui aurait pu être mis ds les champs, les convertis dc en chaine de carctère et les créer de news variables*/
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage = htmlspecialchars($_POST['langage']);

/*tu créer une string qui contient une requête*/
	$query=$bdd->prepare('INSERT INTO eleve(nom, prenom,age,langage) VALUES(?,?,?,?)');

/*execution de requête avec injection des variables que tu attends*/
	$query->execute(array($nom, $prenom,$age,$langage));

	$query->closeCursor();

}

/* lie les nouvelles variables dans la base de donnée my sql

try {

	$bdd = new PDD('mysql:host:localhost;dbname:NOMDELABASEDEDONNEE','root','root');
}

catch{


}

cette condition s'enregistre ds un fichier à  part cf connexion bdd.php car si on a un dépot ds github on ne partage pas ses identifiants et codes...!
*/

/*==============================================================*/

/*redirection vers la page que l'on vt*/

header ('Location: index.php');