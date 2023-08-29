<?php

//-----------------CONTROLEUR PROFIL ADHERENT-----------------//

//on récupère les infos du compte de l'adhérent grâce à l'id
include_once('modele/mod_infocompte.php');
$compte = (getCompte($_SESSION['idAdh']));

$lesAbonnements = (getLesAbonnements($_SESSION['idAdh']));

$nbrAbonnement = (countAbonnement($_SESSION['idAdh']));

include_once('vue/infocompte.php');
