<?php



include 'modele/mod_adherer.php';

$civAdh = $_POST['civilite'];
$nomAdh = $_POST['nomAdh'];
$prenomAdh = $_POST['prenomAdh'];

//-----------------CONTROLEUR ADHESION ADHERENT-----------------//

//on récupère les infos du futur adhérent qu'il a rentré dans le formulaire
$telAdh = $_POST['telAdh'];
$emailAdh = $_POST['emailAdh'];
$mdpAdh = $_POST['mdpAdh'];
$villeAdh = $_POST['villeAdh'];
$comAdh = $_POST['comAdh'];
$TituAdh = $_POST['TituAdh'];
$ibanAdh = $_POST['IbanAdh'];
$BicAdh = $_POST['BicAdh'];



//la fonction set_adherent insère les infos du nouvel adhérent dans la table adherent
set_adherent ($civAdh,$nomAdh, $prenomAdh, $telAdh, $emailAdh, $mdpAdh, $villeAdh, $comAdh, $TituAdh, $ibanAdh, $BicAdh);

include_once('vue/validationAdh.php');



?>