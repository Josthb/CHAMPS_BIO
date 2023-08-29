<?php

//-------------------- FONCTION POUR QUE L'INTERNAUTE PUISSE SE CONNECTER ---------------------//
// Ici on va récupérer les informations de l'adhérent afin de le connecter à son compte, 
//c'est à dire récupérer son email et son mot de passe.
//si ces informations sont présentes alors on connecte l'utilisateur correspondant à ces informations


function get_adherent ($wMail, $wMdp) {
     
	global $bdd;
    //version sécurisée       
    $req = $bdd->prepare("SELECT * FROM adherent   
    							    where emailAdh= :emailAdh
                                    and mdpAdh = :mdpAdh");
                                                                                                          
	$req->execute(array(
        'emailAdh' => $wMail,
        'mdpAdh' => $wMdp
    ));
    
    $adherent = $req->fetch();
    return $adherent;
}
