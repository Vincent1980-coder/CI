<?php
include('entete.php');
?>
<br>
<div class="container custom-control">

	<h5 class="form-title">Nous lançons une grande enquête sur les anciens stagiaires</h5>
	<h5 class="form-title">merci de nous répondre</h5>

	<form action="scriptform.php" method="POST">
	<div class="container-fluid custom-control">
		<div class="container-fluid custom-control">
			<div>
				<fieldset>
					<legend>Vos coordonnées</legend>
					<input type="text" class="input form-control" name="nom" id="nom" placeholder="Nom">
					<br>
					<input type="text" class="input form-control" name="nickname" id="nickname" placeholder="Prénom">
					<br>
					<input type="date" class="input form-control" name="birthday" id="birthday" placeholder="Date de naissance">
					<br>
					<input type="text" class="input form-control" name="adresse" id="adresse" placeholder="Adresse">
					<br>
					<input type="text" class="input form-control" name="ville" id="ville" placeholder="Ville">
					<br>
					<input type="text" class="input form-control" name="codepostal" id="codepostal" placeholder="Code postal">
					<br>
					<input type="email" class="input form-control" name="mail" id="mail" placeholder="Mail">
					<input type="hidden" name="secret" value="valeur cachée">
					<br>
				</fieldset>
			</div>
				<br>
				<fieldset id="radio">
					<div class="custom-control custom-radio"> <label>Sexe</label><br>
						<input type="radio" name="sexe" class="custom-control-input" id="sexe1" value="homme">
						<label class="custom-control-label">vous êtes un homme</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" name="sexe" class="custom-control-input" id="sexe2" value="femme">
						<label class="custom-control-label">vous êtes une femme</label>
					</div>
				</fieldset>
			<br>
			<fieldset>
				<div class="container-fluid">
				<label>Quel est votre profession actuellement ?</label>
					<select id="choix" name="profession" class="custom-select custom-select">
						<option value="développeur" selected>développeur</option>
						<option value="autre">autre</option>
					</select>
					<br>
						<label class="sr-only" for="autre"> si vous avez répondu "autre", précisez
						<input type="text" id="autre" name="autre"> </label>
				</div>
			</fieldset>
				<br>
			<div class="container-fluid">
			<fieldset>
				<label>Quel est votre salaire ?</label>
					<select name="salaire" class="custom-select custom-select">
						<option value="<1000€" selected>-1000€</option>
						<option value="1000 à 2000€">1000 à 2000€</option>
						<option value="2000 à 3000€">2000 à 3000€</option>
						<option value=">3000€">>3000€</option>
					</select>
			</fieldset>
			</div>
			<br>
			<div class="container-fluid">
				<fieldset>
				<label for="stage"> Année de votre formation à l'AFPA ?
				<input type="date" id=stage name="stage">
				</label>
				</fieldset>
			</div>
			<br><br>
			<fieldset>
			<div class="container-fluid">
			<input class="form-control" type="text" placeholder="Vos commentaires">
			</div>
			</fieldset>
				<br><br>
			<input type="submit" name="bouton_envoi"  id="bouton_envoi">
			<input type="button" name="annuler" value="Annuler" id="bouton_reset">
				<br>
			<h3>merci d'avoir répondu au questionnaire</h3>
		</div>
	</div>
	</form>
</div>
<br><br>
<script src="../../assets/js/formulaire.js"></script>

<?php
include("piedpage.php");
?>