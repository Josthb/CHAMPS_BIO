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

function getAbonnement($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT lieu, jour, horaire, nomPanier, dateDebut FROM abonnement JOIN panier ON abonnement.idPanier = panier.idPanier JOIN lieuhoraire ON abonnement.idLieu = lieuhoraire.idLieu JOIN adherent ON abonnement.idAdh = adherent.idAdh WHERE adherent.idAdh = ? ');
    $req->execute(array($id));
    $abonnement = $req->fetch();
    return $abonnement;
}


function getLesAbonnements($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT lieu, jour, horaire, nomPanier, dateDebut FROM abonnement JOIN panier ON abonnement.idPanier = panier.idPanier JOIN lieuhoraire ON abonnement.idLieu = lieuhoraire.idLieu JOIN adherent ON abonnement.idAdh = adherent.idAdh WHERE adherent.idAdh = ? ');
    $req->execute([$id]);
    $lesAbonnements = $req->fetchAll();
    return $lesAbonnements;
}
