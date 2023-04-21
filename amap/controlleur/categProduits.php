<?php

//-----------------CONTROLEUR CATEGORIE PRODUITS-----------------//

//on récupère l'id de la catégorie sélectionnée dans la liste déroulante
$wIdCateg = $_POST['categ'];

//inclusion du modèle produits
include_once 'modele/mod_produits.php';

//on récupère les produits de la catégorie sélectionnée, le nombre de produits et la catégorie sélectionnée
$lesproduits = get_categproduits($wIdCateg);
$nbProduits = count($lesproduits);
$wCategSelectionne = get_produits($wIdCateg);


include_once 'vue/vue_categproduit.php';



?>