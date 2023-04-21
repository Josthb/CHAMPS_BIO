<?php

session_start();

include_once('modele/ConnexionChampBio.php');

// cette variable permet de savoir si l'utilisateur est connecté ou non
if(isset($_SESSION['validateConnexion']) && $_SESSION['validateConnexion'] == true){
    $okSession = true;
    $idAdh = $_SESSION['idAdh'];
    $nomAdh = $_SESSION['nomAdh'];
    $prenomAdh = $_SESSION['prenomAdh'];

}
//si l'utilisateur n'est pas connecté, on n'initialise pas les variables de session

else {
    $okSession = false;
}


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controlleur/accueil.php'); //include_once signifie que le fichier est inclus une seule fois
}

//--------------------- PAGES DU SITE ---------------------//

else {
    if ($_GET['section'] == 'paniers')
    {
        include_once('controlleur/paniers.php');
    }

    if ($_GET['section'] == 'produits')
    {
        include_once('controlleur/produits.php');
    }

    if ($_GET['section'] == 'mentions')
    {
        include_once('vue/mentions_legales.php');
    }

    if ($_GET['section'] == 'panier')
    {
        include_once('controlleur/detailPanier.php');
    }

    if ($_GET['section'] == 'detailproduit')
    {
        include_once('controlleur/detailproduits.php');
    }
    if ($_GET['section'] == 'contact')
    {
        include_once('controlleur/contact.php');
    }

    //---------------------- CONTROLLEUR POUR RECUPERER LE CONTACT ----------------------//
    if ($_GET['section'] == 'recup_contact')
    {
        include_once('controlleur/recup_contact.php');
    }

    if ($_GET['section'] == 'adherer')
    {
        include_once('controlleur/adherer.php');
    }

    //---------------------- CONTROLLEUR POUR RECUPERER LES INFORMATIONS DE L'ADHERENT ----------------------//
    if ($_GET['section'] == 'recup_adherent')
    {
        include_once('controlleur/recup_adherent.php');
    }


    if ($_GET['section'] == 'categorie')
    {
        include_once('controlleur/categProduits.php');
    }
    if ($_GET['section'] == 'SeConnecter')
    {
        include_once('controlleur/SeConnecter.php');
    }

    //---------------------- CONNEXION ET COMPTE ADH ----------------------//
    if ($_GET['section'] == 'verifConnexion')
    {
        $cnxAdh = "v";
        include_once('controlleur/gestionConnexionAdh.php');
    }
    if ($_GET['section'] == 'deconnexion')
    {
        $cnxAdh = "f";
        include_once('controlleur/gestionConnexionAdh.php');
    }
    if ($_GET['section'] == 'profil_Adherent')
    {
        include_once('controlleur/profil_Adherent.php');
    }
    if ($_GET['section'] == 'modifCompte')
    {
        include_once('controlleur/modifCompte.php');

    }

    if ($_GET['section'] == 'validation')
    {
        include_once('vue/validationModifCompte.php');
    }

    //---------------------- ABONNEMENT DES PANIERS FRUITS ET LEGUMES ----------------------//
    if ($_GET['section'] == 'abonnement')
    {
        include_once('controlleur/abonnement.php');
    }
    if ($_GET['section'] == 'recup_abonnement')
    {
        include_once('controlleur/recup_abonnement.php');
    }
    


}



?>
