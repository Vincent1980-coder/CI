<?php

//Concernant la connexion de l'utilisateur au site

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
	$correctPassword = password_verify($this->input->post('pass'), $hash);
	
	if ($this->session->login == TRUE) 
		{	
 		echo"Bienvenue dans votre compte.";
		} 
	else 
		{
   		echo"Vous n'êtes pas autorisé à accéder à cette page.";        
		}
}

//Concernant l'enregistrement de l'utilisateur du site

if ($this->input->post()) {

    if(isset($_POST['nom']))
	{
		$_POST['nom'] = htmlspecialchars($_POST['nom']);
		//Pour rendre les balises HTML inoffensives

		/*
		if (preg_match('`^[[:alnum:]]{3,16}$`',$_POST['nom']))
		{
			echo 'Le nom' . $_POST['nom'] . 'est valide'; 
		}
		else
		{
			echo 'Le nom' . $_POST['nom'] . 'n\'est pas valide, recommencez';
			$ok = FALSE;

		}
		*/

		if (!preg_match('`^[[:alnum:]]{3,16}$`',$_POST['nom']))
		{
			$code = 1;
			$ok = FALSE;
			header('Location:enregistrement.php?code=1');
			exit();
		}
		
	}

	if (isset($_POST['email']))
	{
		$_POST['email'] = htmlspecialchars($_POST['email']); 
		// On rend inoffensives les balises HTML que le visiteur a pu rentrer

		/*
		if (preg_match('`^\w([-_.]?\w)*@\w([-_.]?\w)*\.([a-z]{2,4})$`', $_POST['email']))
		{
			echo 'L\'adresse ' . $_POST['email'] . ' est valide';
		}
		else
		{
			echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
			$ok = FALSE;
		}
	*/

		if (!preg_match('`^\w([-_.]?\w)*@\w([-_.]?\w)*\.([a-z]{2,4})$`', $_POST['email']))
		{
			$code = 2;
			$ok = FALSE;
			header('Location:enregistrement.php?code=2');
			exit();
		}
	}
	
	if (isset($_POST['pass']))
	{
		$_POST['pass'] = htmlspecialchars($_POST['pass']); 
		// On rend inoffensives les balises HTML que le visiteur a pu rentrer

		/*
		if (preg_match('`^\w([-_.]?\w){3,16}$`', $_POST['pass']))
		{
			echo 'Le mot de passe est valide';
		}
		else
		{
			echo 'Le mot de passe n\'est pas valide, recommencez !';
			$ok = FALSE;
		}
		*/

		if (!preg_match('`^\w([-_.]?\w){3,16}$`', $_POST['pass']))
		{
			$code = 3;
			$ok = FALSE;
			header('Location:enregistrement.php?code=3');
			exit();
		}
	}

	if (isset($_POST['pass2']))
	{
		$_POST['pass2'] = htmlspecialchars($_POST['pass2']); 
		// On rend inoffensives les balises HTML que le visiteur a pu rentrer
		/*
		if (preg_match('`^\w([-_.]?\w){3,16}$`', $_POST['pass2']))
		{
			echo 'Le mot de passe est valide';
		}
		else
		{
			echo 'Le mot de passe n\'est pas valide, recommencez !';
			$ok = FALSE;
		}
		*/

		if (!preg_match('`^\w([-_.]?\w){3,16}$`', $_POST['pass2']))
		{
			$code = 4;
			$ok = FALSE;
			header('Location:enregistrement.php?code=4');
			exit();
		}
	}

	/*
	if($_POST["pass"] != $_POST["pass2"])
	{
		echo 'Les mots de passe ne sont pas identiques';
		$ok = FALSE;
	}*/

	//On vérifie que l'utilisateur a bien envoyé les informations demandées 
	if ($ok === TRUE)
	{

		/*echo 'le formulaire peut être posté';*/

			//On utilise alors notre fonction password_hash :
			$hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

		//Connexion à la base de données
		$pdo = new PDO('mysql:host=localhost:3306;charset=utf8;dbname=jarditou', 'root', '');

			//Puis on stock le résultat dans la base de données :
			$query = $pdo->prepare('INSERT INTO users (nom, email, pass) VALUES(:nom, :email, :pass)');
			$query->bindParam(':nom', $_POST['nom']);
			$query->bindParam(':email', $_POST['email']);
			$query->bindParam(':pass', $hash);
			$query->execute();
			
			/*
			header('Location:index.php');
			exit();
			} else {
				echo 'le formulaire ne peut pas être posté';
			}

		} else {
			echo 'a pas posté';
			*/
	}
}	// -- $_POST

//Connexion à la base de données
$this->session->set_userdata('login', TRUE);
$this->session->login;

?>