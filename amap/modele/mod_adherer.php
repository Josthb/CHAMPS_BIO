<?php

//-------------------- FONCTION POUR AJOUTER UN ADHERENT ---------------------//
// Ici on va ajouter un adhérent à la base de données en fonction des informations rentrées dans le formulaire d'inscription
//On insère toutes les informations de l'adhérent dans la table adherent

function set_adherent($WgenreAdh,$WnomAdh, $WprenomAdh,  $WtelAdh, $WemailAdh, $WmdpAdh, $WvilleAdh, $WcomAdh, $WTituAdh, $WibanAdh, $WBicAdh) {

    global $bdd;

    $req = $bdd->prepare("INSERT INTO adherent(civAdh,nomAdh, prenomAdh,  telAdh, emailAdh, mdpAdh, villeAdh, comAdh, tituAdh, ibanAdh, bicAdh) VALUES(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $req->execute([$WgenreAdh,$WnomAdh, $WprenomAdh, $WtelAdh, $WemailAdh, $WmdpAdh, $WvilleAdh, $WcomAdh, $WTituAdh, $WibanAdh, $WBicAdh]);
    
    

}




?>