<?php

//-------------------- FONCTION POUR VISUALISER LES INFORMATIONS DE L'ADHERENT --------------------//
// Ici on va récupérer les informations de l'adhérent afin de les afficher dans son espace dédié

function getCompte($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM adherent WHERE idAdh = ?');
    $req->execute(array($id));
    $compte = $req->fetch();
    return $compte;
}