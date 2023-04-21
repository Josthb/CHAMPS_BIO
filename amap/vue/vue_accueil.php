<?php
include 'vue/vue_entete.php';

?>

<html>
<body>

<section class="hero-image">
        <div class="hero-text">
          <?php
          if (isset($idAdh)) {
            echo '<h1 class = "h1hero">Bienvenue ' . $prenomAdh . ' ' . $nomAdh . '</h1>';
          } else {
            echo '<h1 class = "h1hero">Bienvenue sur ChampsBio</h1>';
          }
          
          ?>
          <p class="phero">Bienvenue sur le site de ChampsBio, une AMAP située à Vouvray, en Touraine. Vous retrouverez sur celui-ci quelques informations sur nous et ce que nous proposons. À tout de suite !</p>
          <a href="index.php?section=paniers"><button class="buttonhero">Découvrir nos offres</button></a>
          
          <?php
         
            //Si l'utilisateur est connecté, on affiche le bouton "Nos produits"
            if(isset($idAdh)){
                echo "<a href='index.php?section=produits'><button class='buttonhero'>Nos produits</button></a>";
               
            }
            //Sinon, on affiche le bouton "se connecter"
            else{
              echo '<a href="index.php?section=adherer"><button class="buttonhero">Adhérer à notre AMAP</button></a>';
            }
        
          ?>
          
        </div>
</section>
<section class="quisommesnous">
        <h1 class="h1qsn">Qui sommes nous ? </h1>
        <div class="row">
            <div class="column">
              <img src="vue/imgs/illustration-concept-fermier_114360-4744.jpg" style="width: 70%" class="qsnimg">
              <p>En tant qu'AMAP, nous aidons les agriculteurs de notre région. C'est pour cela que nous vous proposons divers abonnements à des paniers remplis de divers fruits et légumes fraîchement récoltés et à un prix intéressant pour vous comme pour nos agriculteurs. 
            </p>
            </div>
           
            <div class="column">
              <img src="vue/imgs/label-100-certifie-bio_236275-43.jpg" style="width:60%" class="qsnimg2">
              <p>ChampsBio vous certifie que tous les légumes et fruits présent sur ce site sont d'origine biologique. Nous mettons un point d'honneur à respecter nos clients, nos fournisseurs et la planète.</p>
            </div>
          </div>
        
</section>

<?php 
    include "vue/vue_footer.php";
 ?>


</body>
</html>