<?php
include("entete.php");
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

<div class="container-fluid custom-control">
	<fieldset>
	<h2 class="title">Enregistrement</h2>
		<form action="register.php" method="POST">
			<div class="signup">
				<h2 class="form-title" id="signup">
				<div class="form-holder container">
					<input type="text" name="nom" id="nom" class="input form-control" placeholder="Nom d'utilisateur"><br><br>						<input type="email" name="email" id="email" class="input form-control" placeholder="Email"><br><br>
					<input type="password" name="pass" id="pass" class="input form-control" placeholder="Mot de passe"><br><br>
					<input type="password" name="pass2" id="pass2" class="input form-control" placeholder="Confirmer le mot de passe"><br><br>
				</div>
				<button type="submit" name="enregistrer" class="btn btn-primary">S'enregitrer</button>
			</div>
		</form>
	</fieldset>
		<br>
	<fieldset>
	<h2 class="title">Connexion</h2>
	<form action="login.php" method="POST">
		<div class="form-homder container">
			<h2 class="form-title" id="login"><br>
				<input type="text" name="nom" id="nom" class="input form-control" placeholder="Votre nom d'utilisateur"><br><br>
				<input type="password" name="pass" id="pass" class="input form-control" placeholder="Mot de passe"><br><br>
			<button type="submit" name="connecter" class="btn btn-primary">Se connecter</button>
		</div>
	</form>
	</fieldset>
	<br>
	<p class="mess">Nos produits vous plaisent ? Inscrivez-vous pour recevoir nos dernières nouveautés</p>
</div>
<br>
<script src='../../assets/js/log_rec.js'></script>

<?php
include("piedpage.php");
?>