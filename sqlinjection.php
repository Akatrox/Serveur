<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Lab RT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 500px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 130px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 200px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 130px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}
</style>

</head>

<body>
    <div class="w3-container w3-teal">
        <h1>Le lab des Réseaux et Télécoms </h1>      
        <h4>Un monde connecté sur lab.rt.net</h4>
    </div>

	
	<div><img src="images/bandeau-reseau1.jpg"</div>
	<br>
	<br>
	<form action="login.php" method="post">
		<div>
			<label for="name">Identifiant </label>
			<input type="text" id="login_id" name="username">
		</div>
		<div>
			<label for="mail">Mot de passe </label>
			<input type="password" id="password_id" name="password">
		</div>
		<div class="button">
			<button type="submit">Connexion</button>
		</div>
    </form>
	


<br><p>Liens:
<br><a href='https://www.netacad.com/fr/'>Cisco Netacad</a>
<br><a href='http://www.univ-poitiers.fr/'>Université de Poitiers</a>
<br><a href='http://192.168.1.16'>Caméra de surveillance</a>
<br><br>
</body>
</html>
	

	
	
	
