<?php

    include "vue/vue_entete.php";

    
    

?>

<html>
    <body class="bodyCo">
        
        <div class="AdhCo">
        <section class="connexion">
            
            

            <div>
                <form action = "index.php?section=verifConnexion" method = "post" name="FormConnexionAdh">

                
                    <div class="divLogin">
                        <label for="login" class="loginAdh">Email </label><br>
                        <input type="text" name="TMail" id="login"  class="LoginInput"  autocomplete="off" required/>
                    </div>
                    <div class="divMdp">
                        <label for="mdp" class="mdpAdh">Mot de passe </label><br>
                        <input type="password" name="TMdp" id="mdp" class="MdpInput" required/>
                    </div>
                    <div class="divBtn">
                        <button type="submit" class="BtnCo">Se connecter</button>
                    </div>

                    <?php
                if (isset($_GET['erreur'])){
                    $erreur = $_GET['erreur'];
                    if ($erreur == 1){
                        echo "<div class='divErreur'>";
                            echo "<p class='erreurCo'>Email ou mot de passe incorrect<br>Prenez votre temps et respirez, cela n'est, peut être, qu'une faute de frappe.</p>";
                        echo "</div>";
                        
                        
                    }
                    
                }

                
                
               
                
                
            ?>
                </form>

            </div>
            
           

        </section>
        
        </div>
    </body>
</html>