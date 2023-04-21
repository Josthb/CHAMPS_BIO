<?php

//-------------------- METHODE POUR SE CONNECTER ---------------------//
// Ici on va connecter l'utilisateur, alors définit dans les credentials, à la base de données afin d'afficher le site


require 'credentials.php';
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddamap;charset=utf8', $user, $password);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


?>