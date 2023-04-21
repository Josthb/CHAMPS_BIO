<?php

//-------------------- METHODE POUR RECUPERER LES INFOS DU FORMULAIRE DU CONTACT ---------------------//
// Ici on va récupérer les informations du formulaire de contact afin de les envoyer à la base de données


function set_contact($Wciv,$Wnom, $Wprenom, $Wmail, $Wtel, $Wmess) {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO contact (dateMess ,civ, nom, prenom, mail, tel, mess) VALUES (?,?,?,?, ?, ?, ?)');
    $req->execute([date("d-m-y"),$Wciv,$Wnom, $Wprenom, $Wmail, $Wtel, $Wmess]);
    
}
    

    


?>
