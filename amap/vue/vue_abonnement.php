<?php
    include 'vue/vue_entete.php';
?>

<?php


//infos panier
$idPanier = $_GET['id'];
$imagePanier = $lepanier['imgPanier'];
$nomPanier = $lepanier['nomPanier'];
$descriptionPanier = $lepanier['descPanier'];


//infos adhérent
$civAdh = $ladherent['civAdh'];
$nomAdh = $ladherent['nomAdh'];
$prenomAdh = $ladherent['prenomAdh'];
$telAdh = $ladherent['telAdh'];
$mailAdh = $ladherent['emailAdh'];
$villeAdh = $ladherent['villeAdh'];
$tituAdh = $ladherent['tituAdh'];
$ibanAdh = $ladherent['ibanAdh'];
$bicAdh = $ladherent['bicAdh'];





?>

<html>
    <body>
        <h1 class="titrepanier">Votre abonnement : </h1>
        <p class="desc_abo">Vous allez vous abonner au panier : <?php echo $lepanier['nomPanier']; ?>.<br>Veuillez vérifier vos informations et sélectionner la date de récupération de votre panier.</p>

        <container class="containerPanierAbo">
            <div class="abo">
                <div class="abo__img">
                    <?php echo "<img src='vue/imgs/$imagePanier' alt='' id='imgPanierAbo'>"; ?>
                </div>
                <div class="abo__content">
                    <?php 
                    echo "<h3 class='abo__title'>$nomPanier</h3>";
                    echo "<p class='abo__desc'>$descriptionPanier</p>";
                    ?>
                </div>
            </div>
        </container>

        <container>
            <div class="AdhAbo">
                <div class="adh__titre">
                    <h3 class="titreAdhAbo">Vos informations</h3>
                </div>
            
            
                <div class="adh__content">
                    <?php
                    echo "<p class='adh__civ'>Civilité : $civAdh</p>";
                    echo "<p class='adh__nom'>Nom : $nomAdh</p>";
                    echo "<p class='adh__prenom'>Prénom : $prenomAdh</p>";
                    echo "<p class='adh__tel'>Téléphone : $telAdh</p>";
                    echo "<p class='adh__mail'>Mail : $mailAdh</p>";
                    echo "<p class='adh__ville'>Ville : $villeAdh</p>";

                    if ($tituAdh == ""){
                        echo "<p class='adh__titu'>Titulaire du compte : Cette information nous manque</p>";
                    } else {
                        echo "<p class='adh__titu'>Titulaire du compte : $tituAdh</p>";
                    }
                    
                    if ($ibanAdh == ""){
                        echo "<p class='adh__iban'>IBAN : Cette information nous manque</p>";
                    } else {
                        echo "<p class='adh__iban'>IBAN : $ibanAdh</p>";
                    }
                    if ($bicAdh == ""){
                        echo "<p class='adh__bic'>BIC : Cette information nous manque</p>";
                    } else {
                        echo "<p class='adh__bic'>BIC : $bicAdh</p>";
                    }


                    ?>
                </div>
            </div>
        </container>

        <!--Si l'adhérent n'a pas renseigné toutes ses infos, on lui propose de le faire-->
        <?php
        if ($tituAdh == "" || $ibanAdh == "" || $bicAdh == ""){
            echo "<h3 class='titreWarning'>Attention cher adhèrent !</h3>";
            echo "<p class='info_manquante'>Vous n'avez pas renseigné toutes vos informations. Veuillez les renseigner pour pouvoir vous abonner.</p>";
            echo "<div class='div_btn_modif'>";
                echo "<a href='index.php?section=profil_Adherent' class='btn_modif'>Modifier mes informations</a>";
            echo "</div>";
        } else 
        
        {
            

                        echo '<container class="containRecup">';

                            echo '<div class="dateAbo">';
                                echo '<div class="date__titre">';
                                    echo '<h3 class="titreDateAbo">Date de récupération</h3>';
                                echo '</div>';
                                echo '<div class="date__content">';
                                    echo '<p class="pDateAbo"> Veuillez sélectionner la date de récupération de votre panier : </p>';
                                    
                                    //on met en place le lien permettant de s'abonner au panier, dans l'url on met comme paramètre l'id du panier
                                     echo '<form action="index.php?section=recup_abonnement&id='.$idPanier.'" method="post">';
                                        
                                        
                                    ?>  
                                        <?php

                                        echo "<div class='date__content__select'>";
                                        foreach ($ladateheure as $dateheure){

                                            $idlieu = $dateheure['idlieu'];
                                            $datelieu = $dateheure['jour'];
                                            $heurelieu = $dateheure['horaire'];
                                            $lieu = $dateheure['lieu'];



                                            
                                            echo "<input type='radio' name='dateheure' value='$idlieu' id='dateheure'> 
                                                <label for='dateheure' class='labelRecup'>$datelieu, $heurelieu, $lieu</label><br>";
                                        } 
                                        echo "</div>";
                                        ?>
                                    
                                    <?php
                                        echo '<div class="divBtnAbo">';
                                            echo '<button type="submit" class="btnAbo">Je m\'abonne</button>';
                                        echo '</div>';

                                        
                                   echo '</form>';
                                echo '</div>';
                            echo '</div>';



                        echo '</container>';

        }










    echo '</body>';
    ?>
    <?php
        include 'vue/vue_footer.php';
    ?>
</html>





