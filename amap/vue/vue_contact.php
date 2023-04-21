<?php

include_once ('vue/vue_entete.php');

?>

<html>
    <body>
        <section class="contact">
            
            <form action="index.php?section=recup_contact" method="post">
                
                
                <h1 class="titre__contact">
                Contactez-nous
                </h1>
                <p class="soustitre__contact">
                Vous avez une question, une remarque, une suggestion ? N'hésitez pas à nous contacter !
                </p>

                <!-- civilité -->
                <div class="name__info">
                    <label for="civ" id="nomlabel">Civilité</label>
                    <!-- bouton radio -->
                    <div class="radioContact">
                        <input type="radio" id="madame" name="civ" value="Mme" id="civilite" checked> Madame
                       
                        <input type="radio" id="monsieur" name="civ" value="M" id="civilite"> Monsieur
                        

                    </div>

                <div class="name__info">
                    <label for="nom" id="nomlabel">Nom : </label><br>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" autocomplete="off" required>
                </div>
                
                <div class="name__info">
                    <label for="nom" id="nomlabel">Prenom : </label><br>
                    <input type="text" id="nom" name="prenom" placeholder="Votre prenom" autocomplete="off" required>
                </div>

                    
                <div class="mail__info">
                    <label for="mail" id="maillabel">Mail : </label><br>
                    <input type="email" id="mail" name="mail" placeholder="Votre mail" autocomplete="off" 
                    pattern = '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'
                    oninvalid="this.setCustomValidity('Votre mail doit respecter contenir un @ et un . suivis dun nom de domaine (ex: @gmail.com). Attention, les espaces ne sont pas autorisés ni les majuscules.')"
                    oninput="setCustomValidity('')"
                    required>
                </div>

                <div class="tel__contact">
                    <label for="tel" id="tellabel">Téléphone : </label><br>
                    <input type="text" id="tel" name="tel" placeholder="Votre tél" pattern="0[0-9]{9]" minlength="10" maxlength="10" autocomplete="off" required>
                </div>

                <div class="message__contact">
                    <label for="message" id="messagelabel">Message : </label><br>
                    <textarea id="message" name="mess"  rows="3" cols="30" required></textarea>
                </div>

                <div class="bouton__contact">
                    <button type="submit" id="bouton__contact">Envoyer</button>
                </div>
                
            </form>
        </section>
        

    
</body>

<?php

include 'vue/vue_footer.php';

?>
    
</html>


