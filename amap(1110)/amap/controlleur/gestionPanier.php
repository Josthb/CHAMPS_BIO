<?php

$action = $_REQUEST['action'];

include_once("modele/mod_appli.php");


switch($action){

    case 'voirPanier':
    {

        $nbProduits = count($_SESSION['tabProduits']);

        if ($nbProduits == 0)
        {

            $titreProdits = "Votre panier est vide";
        }
        else
        {

            $titreProdits = "Votre panier contient $nbProduits produit(s)";
        }

        $listeProduits = $_SESSION['tabProduits'];

        $lesProduits = get_detailPanier($_SESSION['tabProduits']);
        $PrixTotalPanier = get_totalPanier($lesProduits);

        include_once("vue/vue_panier_produits.php");
        break;
    }
    case 'ajouterProduit':
    {

        $idProd = $_GET['idProduit'];

       $wtrouve = in_array($idProd, $_SESSION['tabProduits']);

        //Si le produit n'est pas dans le panier, on l'ajoute
        if (!$wtrouve)
        {
            $_SESSION['tabProduits'][] = $idProd;
        }
        header("Location: index.php?section=paniers&action=voirPanier");
        break;
    }

}

?>