<?php
include ("entete.php");

session_start();

$_SESSION["login"] = "";

echo $_SESSION["login"];

?>

<form action="register.php" method="POST">

<p>

<h2 class="title">Enregistrement</h2>

<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup">
		<div class="form-holder">
			<input type="text" id="nom" class="input" placeholder="Nom"><br><br>
			<input type="email" id="email" class="input" placeholder="Email"><br><br>
			<input type="password" id="pass" class="input" placeholder="Mot de passe"><br><br>
            <input type="password" id="pass2" class="input" placeholder="Confirmer mot de passe"><br><br>
		</div>
		<button class="submit-btn">S'enregitrer</button>
	</div>
    <br>

<h2 class="title">Connexion</h2>


	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><br>
			<div class="form-holder">
				<input type="email" id="email" class="input" placeholder="Email"><br><br>
				<input type="password" id="pass" class="input" placeholder="Mot de passe"><br><br>
			</div>
			<button class="submit-btn">Se connecter</button>
		</div>
	</div>
</div>
<p class="mess">Nos produits vous plaisent ? Inscrivez-vous pour recevoir nos dernières nouveautés</p>

<script src='assets/js/log_rec.js'></script>

<?php
include ("piedpage.php");
?>