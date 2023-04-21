<?php

//-------------------- FONCTION POUR MODIFIER LES INFORMATIONS DU COMPTE --------------------//
// Ici on va modifier les informations du compte de l'adhérent



function updateCompte2($tel, $mail, $mdp, $ville,$titu, $iban, $bic, $id)

{
    global $bdd;
    $req = $bdd->prepare('UPDATE adherent SET telAdh = ?, emailAdh = ?, mdpAdh = ?, villeAdh = ?,tituAdh = ?, ibanAdh = ?, bicAdh = ? WHERE idAdh = ?');

    
    $req->execute(array($tel, $mail, $mdp, $ville, $titu, $iban, $bic, $id));
        
    $modifCompte = $req->fetch();
    return $modifCompte;

}


/*function updateCompte($tel, $mail, $mdp, $ville, $com, $titu, $iban, $bic, $id)

{
    global $bdd;
    $req = $bdd->prepare('UPDATE adherent SET telAdh = ?, emailAdh = ?, mdpAdh = ?, villeAdh = ?, comAdh = ?, tituAdh = ?, ibanAdh = ?, bicAdh = ? WHERE idAdh = ?');

    //on exécute tout ca et on le met sous forme de tableau
    
    $req->execute(array($tel, $mail, $mdp, $ville, $com, $titu, $iban, $bic, $id));
        

    
    //on fetch le résultat
    $modifCompte = $req->fetch();
    return $modifCompte;

}*/


?>