<?php

//-----------------CONTROLEUR MODIFICATION COMPTE-----------------//

//récupération des infos du compte dans le formulaire
$tel = $_POST['txtTel'];
$mail = $_POST['txtMail'];
$mdp = $_POST['txtMdp'];
$ville = $_POST['txtVille'];
$titu = $_POST['txtTitu'];
$iban = $_POST['txtIban'];
$bic = $_POST['txtBic'];

include_once 'modele/mod_modifCompte.php';


//on met à jour les infos du compte grâce à la fonction updateCompte2
$modifCompte = updateCompte2($tel, $mail, $mdp, $ville,$titu, $iban, $bic, $idAdh);


include_once 'vue/validationModifCompte.php';


?>