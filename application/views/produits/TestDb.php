<?php

try
{
    $db = new PDO('mysql:host=localhost:3306;charset=utf8;dbname=jarditou', 'root', '');
} catch (Exception $e) {
    echo "Erreur : ". $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}
?>