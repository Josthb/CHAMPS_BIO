<?php

//-------------------- FONCTIONS SERVANT POUR L'ABONNEMENT ---------------------//

//Fonction qui permet de récupérer les informations du panier
//On prend toutes les informations du panier en fonction de l'id du panier

function getPanier($idPanier) {

    global $bdd;

    $req = $bdd->prepare('SELECT * FROM panier WHERE idPanier = ?');

    $req->execute(array($idPanier));

    $lepanier = $req->fetch();

    //$req->closeCursor();

    return $lepanier;

}

//Fonction qui permet de récupérer les informations de l'adhérent
//On prend toutes les informations de l'adhérent en fonction de l'id de l'adhérent

function getadherent ($idAdh) {

    global $bdd;

    $req = $bdd->prepare('SELECT * FROM adherent WHERE idAdh = ?');

    $req->execute(array($idAdh));

    $ladherent = $req->fetch();

    //$req->closeCursor();

    return $ladherent;

}

//Fonction qui permet de récupérer les informations du lieu et de l'horaire

function get_dateheurePanier() {
    
        global $bdd;
    
        $req = $bdd->prepare('SELECT * FROM lieuhoraire');

        $req->execute();
    
        $ladateheure = $req->fetchAll();
    
        
        return $ladateheure;
    
}












?>