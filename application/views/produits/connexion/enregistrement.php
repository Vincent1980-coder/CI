<?php
session_start();
include ("entete.php");
$_SESSION["login"] = "";
echo $_SESSION["login"];


if (isset($_GET['code']) && $_GET['code']==1) {
	echo 'Le nom n\'est pas valide, recommencez';
}

if (isset($_GET['email']) && $_GET['email']==2) {
	echo 'Le mail n\'est pas valide, recommencez';
}

if (isset($_GET['pass']) && $_GET['pass']==3) {
	echo 'Le mot de passe n\'est pas valide, recommencez';
}

if (isset($_GET['pass2']) && $_GET['pass2']==4) {
	echo 'Votre confirmation de mot de passe n\'est pas valide, recommencez';
}

?>

<div class="container">
	<fieldset>
	<h2 class="title">Enregistrement</h2>

	<form action="register.php" method="POST">
		<div class="form-structor">
			<div class="signup">
				<h2 class="form-title" id="signup">
				<div class="form-holder">
					<input type="text" name="nom" id="nom" class="input" placeholder="Nom"><br><br>
					<input type="email" name="email" id="email" class="input" placeholder="Email"><br><br>
					<input type="password" name="pass" id="pass" class="input" placeholder="Mot de passe"><br><br>
					<input type="password" name="pass2" id="pass2" class="input" placeholder="Confirmer mot de passe"><br><br>
				</div>
				<button type="submit" name="enregistrer" class="submit-btn">S'enregitrer</button>
			</div>
		</div>
	</form>
	</fieldset>
	<br>

	<fieldset>
	<h2 class="title">Connexion</h2>

	<form action="login.php" method="POST">

		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><br>
				<div class="form-holder">
					<input type="text" name="nom" id="nom" class="input" placeholder="Votre nom d'utilisateur"><br><br>
					<input type="password" name="pass" id="pass" class="input" placeholder="Mot de passe"><br><br>
				</div>
				<button type="submit" name="connecter" class="submit-btn">Se connecter</button>
			</div>
		</div>
	</form>
	</fieldset>
	<br>
	<p class="mess">Nos produits vous plaisent ? Inscrivez-vous pour recevoir nos dernières nouveautés</p>
</div>
<script src='assets/js/log_rec.js'></script>

<?php
include ("piedpage.php");
?>