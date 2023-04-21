<?php
//-----------------CONTROLEUR POUR RECUPERER L'ABONNEMENT-----------------//

//On récupère la date de l'abonnement par le biais du formulaire et l'id du panier concerné
$dateAbo = $_POST['dateheure'];

$idPanier = $_GET['id'];

include_once 'modele/mod_getAbo.php';


//la fonction getAbo récupère l'id de l'adhérent, la date de l'abonnement et l'id du panier et l'insère dans la table abonnement
getAbo($idAdh, $dateAbo, $idPanier);

include_once 'vue/vue_validationAbo.php';