<html>

<body>
    <!-- Message de confirmation -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong>Success!</strong> Votre compte a bien été modifié.
                </div>
            </div>
        </div>

        <?php

        header("refresh:3;url=index.php?section=profil_Adherent");

        ?>
    </div>
</body>


</html>