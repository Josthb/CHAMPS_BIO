<?php

//-------------------- FONCTIONS POUR AFFICHER LES PANIERS, LES DETAILS ET LES LIEUX POUR LES RECUPERER ---------------------//
// Ici on va récupérer les paniers et les lieux afin de les afficher dans la page paniers
// La fonction get_detailpaniers() est utilisée pour afficher les détails du panier sélectionné dans une page dédiée




function get_paniers() {
    
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM panier");
    $req->execute();
    $lespaniers = $req->fetchAll();

    return $lespaniers;
}

function get_detailPanier($id) {

    global $bdd;
    $req = $bdd->prepare("SELECT * FROM panier WHERE idPanier = ?");
    $req->execute([$id]);
    $unpanier = $req->fetch();

    return $unpanier;

}

function get_lieux() {
    
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM lieuhoraire");
    $req->execute();
    $leslieux = $req->fetchAll();

    return $leslieux;
}




?>