<?php

//-------------------- FONCTION POUR AFFICHER LES PRODUITS EN FONCTION DE LA CATEG ---------------------//
// Ici on va récupérer les produits en fonction de la catégorie afin de les afficher dans la page produits

function get_produits($wIdCateg) {

    global $bdd;

    $req = $bdd->prepare('SELECT * FROM produit where idCateg = ?');
    $req->execute(array($wIdCateg));
    $lesproduits = $req->fetchAll();
    return $lesproduits;

    
   
}


?>