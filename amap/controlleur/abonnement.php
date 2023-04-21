<?php

//-----------------CONTROLEUR ABONNEMENT-----------------//

//inclusion du modèle abonnement
include_once 'modele/mod_abonnement.php';

//récupération de l'id du panier
$idPanier = $_GET['id'];



//On récupère les infos du panier, de l'adhérent et de la date/heure de récupération

$lepanier = getPanier($idPanier);
$ladherent = getadherent($idAdh);
$ladateheure = get_dateheurePanier();


//inclusion de la vue abonnement
include_once 'vue/vue_abonnement.php';