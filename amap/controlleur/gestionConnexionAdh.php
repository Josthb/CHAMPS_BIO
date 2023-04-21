<?php

//-----------------CONTROLEUR GESTION CONNEXION DE L'ADH-----------------//

//Si la variable $cnxAdh est égale à "v" alors on récupère les données du formulaire de connexion
if ($cnxAdh == "v")
{
    //on récupère les données du formulaire de connexion (login et mdp)
    $wLogin = $_POST['TMail'];
    $wMdp = $_POST['TMdp'];

    include_once 'modele/mod_appli.php';

    //on récupère les infos de l'adhérent grâce à son login et son mdp
    $adh = get_adherent($wLogin, $wMdp);

    //si l'adhérent existe alors on récupère ses infos et on les stocke dans des variables de session
    if ($adh){

        $_SESSION['idAdh'] = $adh['idAdh'];
        $_SESSION['nomAdh'] = $adh['nomAdh'];
        $_SESSION['prenomAdh'] = $adh['prenomAdh'];

        //la variable de validation de connexion est égale à true
        $_SESSION ['validateConnexion'] = true; 

        header ('Location: index.php?section=index');
    }
    else{
        //erreur de connexion 
        $_SESSION ['validateConnexion'] = false;
        header ('Location: index.php?section=SeConnecter&erreur=1');
        
        

    }
    
}
//Si la variable $decoAdh est égale à "v" alors on détruit la session et on redirige vers la page d'accueil
else{
    $_SESSION = array();
    session_destroy();
    header('Location: index.php?section=index');
}



?>