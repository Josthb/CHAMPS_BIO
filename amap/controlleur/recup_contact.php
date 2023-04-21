<?php

//-----------------CONTROLEUR CONTACT-----------------//

//on récupére les infos du contact par le biais du formulaire
$civ = $_POST['civ'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$mess = $_POST['mess'];


include_once 'modele/mod_contact.php';

//on envoie les infos du contact dans la table contact grâce à la fonction set_contact
set_contact($civ, $nom, $prenom, $mail, $tel, $mess);

include_once('vue/validation.php');



?>