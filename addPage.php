<?php

use DevNonwaKone\Database;

require_once '../../Class/Database.php';

require_once '../../action/add.php';

$db = new Database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employer</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Nouveau employer</h1>
        <?php
        if ($successMsg) {
            echo $successMsg;
        } else {
            echo $errorMsg;
        }
        ?>
        <div class="row mt-3">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <div class="form-group">
                    <label for="nom" class="mb-1">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control mb-1" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="prenom" class="mb-1">Prenom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control mb-1" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="contact" class="mb-1">Contact</label>
                    <input type="text" id="contact" name="contact" class="form-control mb-1" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="sexe" class="mb-1">Genre</label>
                    <select name="sexe" id="sexe" class="form-control mb-1">
                        <option disabled></option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="poste">Poste Occupé</label>
                    <input type="text" id="poste" name="poste" class="form-control mb-1" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="salaire">Salaire Mensuel</label>
                    <input type="text" id="salaire" name="salaire" class="form-control mb-1" autocomplete="off">
                </div>
                <button name="envoyer" class="btn btn-primary"><i class="bi bi-arrow-right-square"></i> Enregistrer</button>
            </form>
            <a href="../index.php">Retour à la page d'administration</a>
        </div>
    </div>

</body>

</html>