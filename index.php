<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>Formulaire</h1>
<!-- action = envoi ds le fichier X et method ça post le submit-->
<form action="result.php" method="POST">
	<div>
		<label for="nom">Nom :</label>
    	<input id="nom" type="text" name="nom" />
	</div>
	<div>
		<label for="prenom">Prénom :</label>
        <input id="prenom" type="text" name="prenom" />
    </div>
    <div>
    	<label for="age">Age :</label>
        <input id="age"type="text" name="age" />
    </div>
    <div>
    	<label for="langage">Langage :</label>
        <select id="langage" name="langage">
        	<option value="JS">JS</option>
        	<option value="PHP">PHP</option>
        	<option value="Ruby">Ruby</option>
        </select>
    </div>
    <input type="submit" value="Envoyer" />
</form>
	
</body>
</html>