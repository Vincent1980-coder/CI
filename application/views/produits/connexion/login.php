<?php
//Connexion à la base de données
$this->session->set_userdata('login', TRUE);
$this->session->login;

//Nous vérifions que l'utilisateur a bien envoyé les informations demandées 
//if(isset($_POST['nom']) && isset($_POST['pass'])){
	//Nous allons demander le hash pour cet utilisateur à notre base de données :
	$query = $pdo->prepare('SELECT pass FROM users WHERE nom = :nom');
	$query->bindParam(':nom', $_POST['nom']);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];
	
	//Nous vérifions si le mot de passe utilisé correspond bien à ce hash à l'aide de password_verify :
	$correctPassword = password_verify($_POST['pass'], $hash);
	
	if ($this->session->login == TRUE) 
		{	
 		echo"Bienvenue dans votre compte.";
		} 
	else 
		{
   		echo"Vous n'êtes pas autorisé à accéder à cette page.";        
		}
}
?>