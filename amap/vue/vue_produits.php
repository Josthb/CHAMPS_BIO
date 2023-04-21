<?php

include 'vue/vue_entete.php';

?>


<html>
<body>

    <h3 class="titrepanier">Nos produits :</h3>

    <!-- Liste déroulante avec les différentes catégories -->

<div class="formcateg">
<form method = "post" action = "index.php?section=categorie">
    <label for = "categorie" class="choixcateg">Catégorie : </label>

    <?php
        $req = $bdd->query('SELECT * FROM categproduit');
        $req->execute();
        $categ = $req->fetchAll();

        echo "<select name='categ' id='categ'>";
        foreach ($categ as $cat) {
            echo "<option class='optioncateg' value='".$cat['idCateg']."'>".$cat['libelCateg']."</option>";
        }
    ?>
    </select>

   
    <div class="envoicateg">
        <button type="submit"  href = "index.php?section=categorie&idCateg=?" class="btnvalidation">Valider</button>
        
    </div>
    
</form>
</div>

<div class>
        
        <img src="vue/imgs/illustration-concept-fermier_114360-4744.jpg" alt="panier" class="imgpanier">
    </div>
</div>





    

<?php

include 'vue/vue_footer.php';

?>

</body>
</html>

