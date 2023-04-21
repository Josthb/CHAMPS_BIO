<?php
include 'vue/vue_entete.php';

?>
<html>

<body>
    <!-- titre nos produits + l'intitulé de la categ -->
    <h3 class="titrepanier">Nos produits :</h3>


    <section class="produits">


        <?php

        $n = 1;
        foreach ($lesproduits as $unproduit) {

            $wIdProduit = $unproduit['idProduit'];
            $wNomProduit = $unproduit['nomProduit'];
            $wDescProduit = $unproduit['descProduit'];
            $wImgProduit = $unproduit['imgProduit'];
            $wPrixProduit = $unproduit['prixProduit'];

            if ($n == 1) {
                echo '<div class="row">';
            }

            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<div class = 'imgBx'>";
            echo "<img src='vue/imgs/$wImgProduit'>";
            echo "</div>";
            echo "<div class='contentBx'>";
            echo "<h2>$wNomProduit</h2>";
            echo "<p>$wDescProduit</p>";
            //echo le produit en lui mettant un style css pour le prix, blanc avec la police Montserrat et du padding en haut
            echo "<h3 style='color: white; font-family: Montserrat; padding-top: 5px; padding-bottom: 5px'>$wPrixProduit €</h3>";
            echo "<a href='index.php?section=detailproduit&id=$wIdProduit' class='btn'><i style='font-size : 25px' class='bx bx-search-alt'></i></a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";


            if ($n == 3) {
                echo '</div>';
                $n = 0;
            }

            $n++;
        }

        ?>

        <!--bouton retour-->


    </section>

    <div class="retour">
        <a href="index.php?section=produits"><button class="btnretour">Retour</button></a>
    </div>


    <?php


    include 'vue/vue_footer.php';

    ?>



</body>

</html>