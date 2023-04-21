<?php

//-----------------CONTROLEUR DETAIL PRODUIT-----------------//

//récupération de l'id du produit
$idlesproduitschoisi = $_GET['id'];
include_once 'modele/mod_produits.php';

//on récupère les infos du produit sélectionné grâce à l'id
$lesdetailsproduits = get_detailproduits($idlesproduitschoisi);

include_once 'vue/vue_detailproduit.php';

?>