
<?php

include_once 'vue/vue_entete.php';

?>

<html>
<link rel="stylesheet" href="vue/css/style2.css">
<body>

   
    <h3 class="titrepanier"><?php echo $lesdetailsproduits['nomProduit']; ?></h3>

    <section class="detailproduit"> 
<?php

    $xIdProduit = $lesdetailsproduits['idProduit'];
    $xNomProduit = $lesdetailsproduits['nomProduit'];
    $xDesclongueProduit = $lesdetailsproduits['descLongueProduit'];
    $xDescProduit = $lesdetailsproduits['descProduit'];
    $xImgProduit = $lesdetailsproduits['imgProduit'];
    $xPrixProduit = $lesdetailsproduits['prixProduit'];
?>



<div class="panier">
        <div class="panier__img">
            <?php echo "<img src='vue/imgs/$xImgProduit' alt=''>"; ?>
        </div>
        <div class="panier__content">
            <?php 
            echo "<h3 class='panier__title'>$xNomProduit</h3>";
            echo "<p class='panier__desc'>$xDescProduit</p>";
            echo "<p class='panier__desclong'>$xDesclongueProduit</p>"; 
            ?>
        </div>
        <div class="divbtnpanier">
            <a href="index.php?section=produits" class="cta"><button class="btnpanier">Retour</button></a>
        </div>
    
</section>




</body>

<?php
    include 'vue/vue_footer.php';
?>


</html>


