
<!--PAGE DE VALIDATION DE L'ADHERENT-->

<html>
<link rel="stylesheet" href="vue/css/style2.css">
    <body>
        
        <!--Message de bienvenue avec le nom et prénom de l'adhèrent-->
        <h1 class="titreadherer">Bienvenue <?php echo $nomAdh . ' ' . $prenomAdh; ?> !</h1>
        <h3 class="recapSousTitre">Voici un récapitulatif de vos informations rentrées : </h3>

        <div class="coordAdh">
            <p>Civilité : <?php echo $_POST['civilite']; ?></p>
            <p>Nom : <?php echo $_POST['nomAdh']; ?></p><br>
            <p>Prénom : <?php echo $_POST['prenomAdh']; ?></p><br>
            <p>Téléphone : <?php echo $_POST['telAdh']; ?></p><br>
            <p>e-mail : <?php echo $_POST['emailAdh']; ?></p><br>
            <p>Ville : <?php echo $_POST['villeAdh']; ?></p><br>
            <p>Commentaire : <?php echo $_POST['comAdh']; ?></p><br>

        </div>

        <h3 class="recapSousTitre">Voici un récapitulatif de vos informations de paiement : </h3>

        <div class="coordAdh">
            <?php

            //si l'un de ces champs est manquant, on affiche : "Cette information nous manque"
            if ($_POST['TituAdh'] == ""){
                echo "<p>Titulaire du compte : Cette information nous manque</p><br>";
            } else {
                echo "<p>Titulaire du compte : " . $_POST['TituAdh'] . "</p><br>";
            }
            if ($_POST['IbanAdh'] == ""){
                echo "<p>IBAN : Cette information nous manque</p><br>";
            } else {
                echo "<p>IBAN : " . $_POST['IbanAdh'] . "</p><br>";
            }
            if ($_POST['BicAdh'] == ""){
                echo "<p>BIC : Cette information nous manque</p><br>";
            } else {
                echo "<p>BIC : " . $_POST['BicAdh'] . "</p><br>";
            }


            ?>
        </div>


        
    </body>

    <?php

    header('refresh:10;url=index.php?section=index');


    ?>











</html>