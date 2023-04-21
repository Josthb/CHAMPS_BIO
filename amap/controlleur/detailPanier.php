<?php

//-----------------CONTROLEUR DETAIL PANIER-----------------//

//récupération de l'id du panier
$idPanier = $_GET['id'];

//inclusion du modèle paniers
//on récupère les infos du panier sélectionné grâce à l'id
include_once('modele/mod_paniers.php');
$unpanier = get_detailPanier($idPanier);

include_once('vue/vue_detailPanier.php');

?>