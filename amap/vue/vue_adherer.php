
<?php

include_once 'vue/vue_entete.php';

?>

<html>
<link rel="stylesheet" href="vue/css/style2.css">
<body class="bodyAdherer">


<h1 class="titreAdh"> Devenez adhérent de notre AMAP:</h1>

<!-- Créer une box pour le formulaire -->
<form action="index.php?section=recup_adherent" method="post">


<div class="formsAdh">
<div class="box">
    
    
    <div class="box-body">
    <div class="box-header">
        <h3 class="box-title">Formulaire d'inscription</h3>
        <p>Les champs marqués par </i><em>*</em> sont <em>obligatoires</em></p>
    </div>
            <!--choix de civilite-->
            <div class="form-group">
                <label for="civilite" class="labelNom">Civilité <em>*</em></label><br>
                <div class="radio">
                    <input class="radioForm" type="radio" name="civilite" value="Mme" id="civilite" required checked> Madame
                    <input class="radioForm" type="radio" name="civilite" value="M" id="civilite" required> Monsieur
                </div>
            </div>
            <div class="form-group">
                <label for="nom" class="labelNom">Nom <em>*</em></label><br>
                <input  class="inputForm" type="text" id="nomAdh" name="nomAdh"  autocomplete="off" placeholder = "Nom" required><br>
            </div>
            <div class="form-group">
                <label for="prenom" class="labelPrenom">Prénom :<em>*</em></label><br>
                <input  class="inputForm" type="text" id="prenomAdh" name="prenomAdh" autocomplete="off" placeholder="Prenom" required>
            </div>
            <div class="form-group">
                <label for="num" class="labelTel">Numéro de télephone : <em>*</em></label><br>
              
                <input  class="inputForm" type="text" id="telephone" type="telAdh"  
                pattern="0[0-9]{9}"  name="telAdh"  autocomplete="off" maxlength="10" minlength="10"   placeholder="Votre numéro de téléphone"   required><br>
            </div>

            <div class="form-group">
                <label for="mail" class="labelMail">e-mail&nbsp;:<em>*</em></label><br>
                <input class="inputForm" type="email" id="emailAdh" name="emailAdh" autocomplete="off" 
                pattern = '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'
                required placeholder="Votre mail"
                oninvalid="this.setCustomValidity('Votre mail doit respecter contenir un @ et un . suivis dun nom de domaine (ex: @gmail.com). Attention, les espaces ne sont pas autorisés ni les majuscules.')"
                oninput="setCustomValidity('')">
              
                
            </div>


            <div class="form-group">
                <label for="adresse" class="labelAdr">Mot de passe&nbsp;:<em>*</em></label><br>
                <input class="inputForm" type="password" id="mdpAdh" name="mdpAdh" maxlength="25" minlength="8"
                pattern = "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
                required placeholder="Votre mot de passe" 
                oninvalid="this.setCustomValidity('Votre mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre')" 
                oninput="setCustomValidity('')"> 
                <!-- ici on met une regex pour le mot de passe, il doit contenir au moins une majuscule, une minuscule et un chiffre -->
                
                
                
            </div>
            
            <div class="form-group">
                <label for="ville" class="labelCommune">Commune : <em>*</em></label><br>
                <input class="inputForm"type="text" id="villeAdh" name="villeAdh" autocomplete="off" placeholder="Votre commune" required>
            </div>
            <div class="form-group">
                <label for="comments" class="labelComments">Pourquoi voulez-vous adhérer à l'AMAP?</label><br>
                <textarea class="inputMessage" id="comAdh" name="comAdh"></textarea>
            </div>
        
    </div>
    
</div>

<!-- Une box contenant un formulaire pour les infos de paiement -->

<div class="box2">
   
    <!-- /.box-header -->
    <div class="box-body2">
    <div class="box-header2">
        <h3 class="box-title2">Informations de paiement</h3>
        <p>Ces informations peuvent être renseignées ultérieurement</p>
    </div>
    
            <div class="form-group2">
                <label class="labelTitu" for="nom">Titulaire du compte :</label><br>
                <input class="inputForm" id="nomAdh" name="TituAdh"  autocomplete="off" placeholder="Le titulaire du compte"><br>
            </div>

            <div class="form-group2">
                <label  class="labelIban"for="prenom">IBAN :</label><br>
                <input class="inputForm" type="text" id="IbanAdh"  name="IbanAdh" maxlength="32"    autocomplete="off"
                pattern = "[A-Z]{2}[0-9]{2}[A-Z0-9]{26}[0-9]{2}"
                placeholder="Votre IBAN"
                oninvalid="this.setCustomValidity('Votre IBAN doit contenir 32 caractères, 2 lettres, 2 chiffres, 26 caractères alphanumériques et 2 chiffres')"
                oninput="setCustomValidity('')">
            </div>
            
            <div class="form-group2">
                <label class="labelBic" for="num">BIC : </label><br>
                <input class="inputForm" id="BicAdh" type="BicAdh"    name="BicAdh"  autocomplete="off" maxlength="8"
                pattern="[A-Z]{6}[A-Z2-9][A-NP-Z0-9]([A-Z0-9]{2})?"
                placeholder="Votre BIC"
                oninvalid="this.setCustomValidity('Votre BIC doit contenir 8 caractères : 6 lettres et 2 chiffres')"
                oninput="setCustomValidity('')">

                <br>
            </div>
        
    </div>
   
</div>
</div>

<div class="boutonAdh">
    <button type="submit" class="btnformAdh">Adhérer</button>
</div>


</form>







<?php
    include 'vue/vue_footer.php';
?>

</body>
</html>