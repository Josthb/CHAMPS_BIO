<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vue/css/style.css">
    <link rel="stylesheet" href="vue/css/style2.css">
    <link rel="stylesheet" href="vue/css/style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    
    <title>ChampsBio</title>
</head>
<body>
    <navbar class="">
        <img src="vue/imgs/LOGO_CHAMPSBIO.png" alt="logo" class="logo">
        <nav>
            <ul class="nav__link">
                <li><a href="index.php?section=index">Accueil</a></li>
                <li><a href="index.php?section=paniers">Nos paniers</a></li>
                <li><a href="index.php?section=produits">Nos produits</a></li>
                <li><a href="index.php?section=contact">Contact</a></li> 
            </ul>
        </nav>
        <div class="boutonnav">
            <?php
            if (isset($_SESSION['idAdh']))
            {
                echo '<a href="index.php?section=profil_Adherent"  class="cta"><button class="btnnav"><i class="bx bxs-user-circle" id="iconUser"></i>' . $_SESSION['prenomAdh'] . ' ' . $_SESSION['nomAdh'] . '</button></a>';
                

               
                echo '<a href="index.php?section=deconnexion" class="cta"><button class="btnnav">Déconnexion</button></a>';
            }
            else{
                echo "<a href='index.php?section=adherer' class='cta'><button class='btnnav'>Adhérer</button></a>";
                echo "<a href='index.php?section=SeConnecter' class='cta'><button class='btnnav'>Connexion</button></a>";
            }
            ?>
        </div>
    </navbar>

</body>
</html>