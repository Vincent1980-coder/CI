<?php
$prenom = $_POST['nickname'];  
$nom = $_POST['nom'];

    if (empty($_POST["nom"]))
    {
        echo "Le nom doit être renseigné";	
    } 

echo $_POST["secret"];
?>