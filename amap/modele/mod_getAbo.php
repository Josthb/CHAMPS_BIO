<?php

//-------------------- FONCTION POUR AJOUTER UN ABONNEMENT --------------------//
// Ici on va ajouter un abonnement à la base de données en prenant comme information : 
// l'id de l'adhérent, l'id du lieu et l'id du panier, on y ajoutera aussi la date de début de l'abonnement

function getAbo($idAdh, $idLieu, $idPanier){
    global $bdd;

    $req = $bdd->prepare('INSERT INTO abonnement (dateDebut, idAdh, idLieu, idPanier) VALUES (?, ?, ?, ?)');
    $req->execute(array(date('Y-m-d'), $idAdh, $idLieu, $idPanier));
    $abo = $req->fetch();

    return $abo;

    


    
}
?>