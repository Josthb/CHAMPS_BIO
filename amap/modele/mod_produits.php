<?php

//-------------------- FONCTION POUR AFFICHER LES PRODUITS, LES DETAILS ET LES CATEGORIES ---------------------//
// Ici on va récupérer les produits en fonction de la catégorie choisie par le biais d'un menu déroulant (get_categproduits)
// La fonction get_detailproduits() est utilisée pour afficher les détails du produit sélectionné dans une page dédiée

function get_produits() {
    global $bdd;

    $req = $bdd->prepare('SELECT * FROM produit');
    $req->execute();
    $lesproduits = $req->fetchAll();

    return $lesproduits;
}

function get_detailproduits($idProduit) {
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM produit where idProduit=$idProduit");
    $req->execute();
    $lesdetailsproduits = $req->fetch();

    return $lesdetailsproduits;
}


function get_categproduits($wIdCateg) {

    global $bdd;

    $req = $bdd->prepare('SELECT * FROM produit where idCateg = ?');
    $req->execute(array($wIdCateg));
    $lesproduits = $req->fetchAll();
    return $lesproduits;

    
   
}

?>


