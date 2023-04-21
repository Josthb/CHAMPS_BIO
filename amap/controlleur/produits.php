<?php

    //-----------------CONTROLEUR PRODUITS-----------------//
    include_once 'modele/mod_produits.php';

    //on récupère les produits
    $lesproduits = get_produits();

    include_once 'vue/vue_produits.php';


?>