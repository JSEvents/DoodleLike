<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>JsEvents</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php
include("php/config.php");

?>

<body>
	<button id="btDeconnexion" class="btn btn-primary btnav">Déconnexion</button>
	<br>
	<br>
	<h1 class="text-center">JS Events</h1>
	<br>
	<br>

	
	<section id="login" class="page ">
		  <div id="formlogin" class="form container text-center"  >
            <div style='text-align: center' >
           
            </div>

            <label for="inputEmail" class="sr-only">Identifiant</label>
            <input type="email" id="email" class="form-control" placeholder="Identifiant" required="" name="email" autofocus="">
            <label for="inputPassword" class="sr-only">Mot de Passe</label>
            <input type="password" id="password" class="form-control" placeholder="Mot de Passe" name="password"  required="">
            <!-- Afficher message d'erreur -->
            <button id="btConnexion" class="btn btn-primary btnav"  >Connexion</button>
            <button id="btInscription" class="btn btn-primary btnav" >Inscription</button>     
     		
            <div id="recupPwd" class="fa-pull-right">
                <a href="#">Récupérer mon mot de passe</a>
            </div>
             </div>
	</section>

	<section id="tableau"  class="page">
		
		<h2 class="text-center">Tableau de bord</h2>

		<h3 class="text-center container">Liste des événements</h3>
		<div id="liste" class="text-center"></div>

		<h3  class="text-center container">Evénements</h3>
		<div id="evenement" class="text-center"></div>

	</section>

	<section id="inscription" class="page">
		  <h2 class="text-center">Création d'un nouveau compte</h2>
        <div id="formInscription" class="form">
            <label for="nom">Nom</label>
            <div >
                <input id="nom" type="text" name="nom" required>
            </div>
            <label for="prenom">Prenom</label>
            <div >
                <input id="prenom" type="text" name="prenom"  required>
            </div>

            <label for="email">Adresse mail</label>
            <div >
                <input id="email2" type="email" name="email">
            </div>

            <label for="password">Mot de passe</label>
            <div >
                <input id="password2" type="text" name="password" required>
            </div>
            <label for="name">Téléphone</label>
            <div >
                <input id="tel" type="tel" name="tel" required>
            </div>
            <button id="btFormInscription" class="btn btn-primary btnav" >Enregistrer</button>
            <button id="btAnnulerInscription" class="btn btn-primary btnav" >Annuler</button>
	</div>


	</section>

	<section id="creation" class="page ">

			<h1>Créer un événement</h1>

			<form>
				<div class="well">
					<h2>Informations générales</h2>
				  <div class="form-group">
				    <label for="nom">Nom de l'événement</label>
				    <input type="text" class="form-control" id="nom" placeholder="Nom de l'événement">
				  </div>
				  <div class="form-group">
				    <label for="descrption">Description de l'événement</label>
				    <textarea class="form-control" rows="3"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="avatar">Choisissez un avatar d'événement</label>
				    <input type="file" id="avatar">
				  </div>
			  	</div>


				<div class="well">
					<h2>Type de la colonne</h2>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="type1" value="option1" checked> Texte
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="type2" value="option2"> Date
					</label>


				  <div class="form-group">
				    <label for="colonne">Choisissez un nom de colonne</label>
				    <input type="text" class="form-control" id="colonne" placeholder="Nom du moment">
				  </div>
				  <div class="form-group">
				    <label for="moment">Choisissez la date</label>
				    <input type="date" class="form-control" id="moment" placeholder="Date">
				  </div>

				  <button class="btn btn-info">Ajouter une colonne</button>
			  </div>

			<div class="well">
				<h2>Pré-visualisation :</h2>
				<table class="table table-bordered table-stripped" id="previsualisation">


				</table>
			 </div>

			  <button type="submit" class="btn btn-success">Validerotot</button>
			</form>

		</section>


	
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/fonctions.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/navigation.js"></script>
<script type="text/javascript" src="js/animationlogin.js"></script>
</html>