<?php

include_once 'vue/vue_entete.php';

?>

<html>
<body>

    <h3 class="titrepanier">Nos paniers :</h3>


    <section class="panier"></section>
        <?php
            $n = 1;
            foreach ($lespaniers as $unpanier) {
                

                $wIdPanier = $unpanier['idPanier'];
                $wNomPanier = $unpanier['nomPanier'];
                $wDescPanier = $unpanier['descPanier'];
                $wImgPanier = $unpanier['imgPanier'];
            
                if ($n == 1) {
                    echo '<div class="row">';
                }
                
                echo "<div class='container'>";
                echo "<div class='card'>";
                echo "<div class = 'imgBx'>";
                echo "<img src='vue/imgs/$wImgPanier'>";
                echo "</div>";
                echo "<div class='contentBx'>";
                echo "<h2>$wNomPanier</h2>";
                echo "<p>$wDescPanier</p>";
                echo "<a href='index.php?section=panier&id=$wIdPanier' class='btn'>Voir le panier</a><br>";
                
                //si l'utilisateur est connecté, la possibilité de s'abonner via l'icone panier
                if (isset($idAdh)) {
                    echo "<a href= 'index.php?section=abonnement&id=$wIdPanier' class='btn'><i class='bx bx-cart-download' id='subicon'></i></a>";
                }
                


               
                echo "</div>";
                echo "</div>";
                echo "</div>";
                

                if ($n == 3) {
                    echo '</div>';
                    $n = 0;
                }

                $n++;
                

            }
            if ($n != 1) {
                echo '</div>';
            }

            

        ?>
</section>

<section>
    <div class="titreliste">
          <h3>Les paniers sont récuperables :</h3>
    </div>
     <div class="lieuxpaniers">
           <ul>
           <?php
                foreach ($leslieux as $unlieu) 
                {           
                

                
                    $wJour = $unlieu['jour'];
                    $wHoraire = $unlieu['horaire'];
                    $wLieu = $unlieu['lieu'];
            
            
                
                    echo "<li class='listelieux'>$wJour $wHoraire $wLieu </li>";
                }
            ?>
           </ul>
     </div>
</section>

<?php

include_once 'vue/vue_footer.php';

?>


</body>
</html>