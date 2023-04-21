<?php

    //-----------------CONTROLEUR PANIERS-----------------//


    include_once 'modele/mod_paniers.php';

    //On récupère les infos des paniers et des lieux de récupération
    $lespaniers = get_paniers();
    $leslieux = get_lieux();

    include_once 'vue/vue_amappanier.php';

?>