<?php

    include "vue/vue_entete.php";

?>

<html>
    <h1 class="titrepanier">Votre panier</h1>
    <p class="phrasePanier"><?php echo $titreProdits ?></p>

    <!-- tableau contenant les produits du panier -->
    <table class="tableauPanier">
        <tr>
            <th class="thPanier">Image</th>
            <th class="thPanier">Nom</th>
            <th class="thPanier">Prix</th>
            <th class="thPanier">Supprimer</th>
        </tr>
    
        <?php
        foreach ($lesProduits as $unProduit) {
            $wIdProduit = $unProduit['idProduit'];
            $wNomProduit = $unProduit['nomProduit'];
            $wPrixProduit = $unProduit['prixProduit'];
            $wImgProduit = "vue/imgs/" . $unProduit['imgProduit'];

            echo "<tr>";
            echo "<td class='tdPanier'><img src='$wImgProduit' class='imgPanier'></td>";
            echo "<td class='tdPanier'>$wNomProduit</td>";
            echo "<td class='tdPanier'>$wPrixProduit €</td>";
            echo "<td class='tdPanier'><a href='index.php?section=panierProduits&action=supprimerProduit&id=$wIdProduit'><i class='bx bx-trash'></i></a></td>";
            echo "</tr>";
        }
        ?>
    
        
        
</html>