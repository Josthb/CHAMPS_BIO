<?php


include_once('vue/vue_entete.php');



?>


<html>


<body class="bodyInfoCompte">

    <h1 class="titreAdh2">Votre tableau de bord </h1>
    <div class="InfoAdh">
        <div class="tabs">
            <div class="tabs__head">
                <a href=#tab1 class="tabs__toggle is-active">
                    Infos perso
                </a>

                <a href=#tab2 class="tabs__toggle">
                    Motif de l'adhésion
                </a>

                <a href=#tab3 class="tabs__toggle">
                    Infos de paiement
                </a>

                <a href=#tab4 class="tabs__toggle">
                    Abonnements
                </a>

            </div>


            <!-- FORMULAIRE POUR MODIFIER LES INFORMATIONS PERSONNELLES
            Les champs seront pré-remplis avec les infos de l'adhérent qu'on récupère dans la base de données
            -->

            <form method="POST" action="index.php?section=modifCompte">
                <div class="tabs__body">
                    <div class="tabs__content is-active" id="tab1">
                        <h1 class="tabs__title">Informations personnelles</h1>
                        <h2 class="tabs__text">Civilité :</h2>
                        <p class="pAdh"><?php echo $compte['civAdh']; ?></p>

                        <!-- SI LA CIVILITE N'EST PAS RENSEIGNEE, ON AFFICHE UN MESSAGE 
                            (ce message ne sert que dans le cas où l'adherent a été crée avant l'ajout de la civilité )
                            -->

                        <?php

                        if ($compte['civAdh'] == "") {
                            echo "<p class='pAdh'>Non renseigné</p>";
                        }

                        ?>


                        <h2 class="tabs__text">Nom :</h2>
                        <p class="pAdh"> <?php echo $compte['nomAdh']; ?></p>
                        <h2 class="tabs__text ">Prénom :</h2>
                        <p class="pAdh"> <?php echo $compte['prenomAdh']; ?></p>
                        <h2 class="tabs__text">Tél :</h2>
                        <div class="modifdiv">
                            <input class="inputModifAdh" type="text" name="txtTel" value="<?php echo $compte['telAdh']; ?>">
                        </div>
                        <h2 class="tabs__text">Mail :</h2>
                        <div class="modifdiv">

                            <input class="inputModifAdh" type="email" name="txtMail" value=" <?php echo $compte['emailAdh']; ?>" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required placeholder="Votre mail" oninvalid="this.setCustomValidity('Votre mail doit respecter contenir un @ et un . suivis dun nom de domaine (ex: @gmail.com). Attention, les espaces ne sont pas autorisés ni les majuscules.')" oninput="setCustomValidity('')">
                        </div>
                        <h2 class="tabs__text">Mdp : </h2>
                        <div class="modifdiv">
                            <input class="inputModifAdh" type="password" name="txtMdp" value="<?php echo $compte['mdpAdh']; ?>" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" oninvalid="this.setCustomValidity('Le mot de passe doit contenir au moins 8 caractères dont une majuscule, une minuscule et un chiffre')" oninput="setCustomValidity('')">
                        </div>
                        <h2 class="tabs__text">Ville :</h2>
                        <div class="modifdiv">
                            <input class="inputModifAdh" type="text" name="txtVille" value="<?php echo $compte['villeAdh']; ?> ">

                        </div>
                    </div>
                    <div class="tabs__content" id="tab2">
                        <h1 class="tabs__title">Motivation</h2>
                            <h3 class="tabs__text"></h3>
                            <p class="pAdh"> <?php echo $compte['comAdh']; ?></p>

                            <!-- SI LE MOTIF N'EST PAS RENSEIGNE, ON AFFICHE UN MESSAGE -->
                            <?php

                            if ($compte['comAdh'] == "") {
                                echo "<p class='pAdh'>Non renseigné</p>";
                            }
                            ?>



                    </div>
                    <div class="tabs__content" id="tab3">
                        <h1 class="tabs__title">Informations de paiement</h1>

                        <?php

                        //Si les champs sont vides ou l'un des champs est vide, 
                        //on affiche un message comme quoi ils peuvent être remplis
                        if (
                            $compte['tituAdh'] == "" && $compte['ibanAdh'] == "" && $compte['bicAdh'] == ""
                            || $compte['tituAdh'] == "" || $compte['ibanAdh'] == "" || $compte['bicAdh'] == ""
                            || $compte['tituAdh'] == "" && $compte['ibanAdh'] == ""
                            || $compte['tituAdh'] == "" && $compte['bicAdh'] == ""
                            || $compte['ibanAdh'] == "" && $compte['bicAdh'] == ""
                        ) {
                            //Affichage des modalités de remplissage des champs

                            echo "<p class='pInfosPaiement'>Les champs présent ici peuvent être rempli à une date ultérieure, néanmoins elles doivent être présente pour toute volonté d'abonnement ou d'achat sur notre site.</p>";
                            echo "<ul class='ulInfosPaiement'> Les modalités du remplissage des champs sont les suivantes :
                                <li class='liInfosPaiement'>Titulaire du compte : Nom et prénom du titulaire du compte bancaire</li>
                                <li class='liInfosPaiement'>IBAN : il doit contenir 32 caractères comme celui-ci : FR76 3000 6005 0500 0100 0185 1000 1234</li>
                                <li class='liInfosPaiement'>BIC : il doit etre composé de 8 caractères comme celui-ci : FR264879</li>
                                </ul>";
                        }


                        ?>


                        <h2 class="tabs__text ">Titulaire du compte :</h2>
                        <div class="modifdiv">
                            <input class="inputModifAdh" type="text" name="txtTitu" value=" <?php echo $compte['tituAdh']; ?>">
                        </div>
                        <h2 class="tabs__text ">IBAN :</h2>
                        <div class="modifdiv">
                            <input class="inputModifAdh2" type="text" name="txtIban" value=" <?php echo $compte['ibanAdh']; ?>" pattern="[A-Z]{2}[0-9]{2}[A-Z0-9]{26}[0-9]{2}" maxlength="32">

                        </div>
                        <h2 class="tabs__text ">BIC :</h2>
                        <div class="modifdiv">
                            <input class="inputModifAdh" type="text" name="txtBic" value=" <?php echo $compte['bicAdh']; ?>" pattern="[A-Z]{6}[A-Z2-9][A-NP-Z0-9]([A-Z0-9]{2})?" maxlength="8">


                        </div>



                    </div>




                    <div style="max-height: 300px; overflow-y: scroll;" class="tabs__content" id="tab4">
                        <div class='tabs__title'>
                            <?php $nbrAbonnement ?>
                            <?php if ($nbrAbonnement == 0) {
                                echo "<p class='pAdh' style = 'color: red;'>Vous n'avez pas d'abonnement pour l'instant</p>";
                                echo "<p class='pAdh'>Vous pouvez en souscrire un en cliquant sur le lien ci-dessous</p>";
                                echo "<a class='linkAbo' href='index.php?section=paniers'>Souscrire un abonnement</a>";
                            } else if ($nbrAbonnement == 1) {
                                echo "<h1 class='tabs__title'>Abonnement</h1>";
                            } else {
                                echo "<h1 class='tabs__title'>Abonnements</h1>";
                            } ?>



                        </div>

                        <?php foreach ($lesAbonnements as $unAbonnement) { ?>




                            <div class='abonnements__content'>


                                <h2 class='tabs__text' id="aboActu">Abonnement actuel :</h2>
                                <p class='pAdh'> <?php echo $unAbonnement['nomPanier']; ?></p>

                                <h2 class='tabs__text' id="aboActu">Informations de récupération :</h2>
                                <p class='pAdh'> <?php echo $unAbonnement['lieu'] . '</br>' . $unAbonnement['jour'] . ' ' . $unAbonnement['horaire']; ?></p>

                                <h2 class='tabs__text' id="aboActu">Date initale de l'abonnement :</h2>
                                <p class='pAdh'> <?php echo $unAbonnement['dateDebut']; ?></p>
                            </div>
                            <!-- une petite barre pour séparer les abonnements
                             -->
                            <div class='barre'></div>





                        <?php } ?>
                    </div>
                </div>


                <div>
                    <button class="btnValidModif" type="submit" name="btnValider">Valider les modifications</button>
                </div>
            </form>



        </div>


        <script src="vue/js/script.js"></script>
    </div>
</body>


<?php

include_once('vue/vue_footer.php');
?>

</html>