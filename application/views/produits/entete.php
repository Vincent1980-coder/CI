<!-- application/views//produits/entete.php -->

<!DOCTYPE html>	
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jarditou</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url("assets/css/perso.css"); ?>">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  

    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand"><img src="<?= base_url("assets/img/jarditou_logo2.png"); ?>" id="logo" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item1">
                        <a class="nav-link" href="<?= site_url("produits/accueil"); ?>">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="<?= site_url("produits/liste"); ?>">Produits</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="<?= site_url("produits/session"); ?>">Log In/Enregistrement</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="<?= site_url("produits/contact"); ?>">Contact</a>
                    </li>
                </ul>
            </div>
    </nav>

</head>
<body>
    
<h1 id="titre">La qualité depuis 70 ans</h1>