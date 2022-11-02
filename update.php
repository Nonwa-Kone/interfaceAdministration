<?php

use DevNonwaKone\Database;

$successMsg = null;
$errorMsg = null;

$db = new Database();

if (isset($_POST['envoyer'])) {

    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['contact']) and !empty($_POST['sexe']) and !empty($_POST['poste']) and !empty($_POST['salaire'])) {

        $id = htmlentities($_GET['id']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $contact = htmlentities($_POST['contact']);
        $sexe = htmlentities($_POST['sexe']);
        $poste = htmlentities($_POST['poste']);
        $salaire = htmlentities($_POST['salaire']);

        $val = [$nom, $prenom, $contact, $sexe, $poste, $salaire, $id];
        $req = $db->updateInfoEmployer('UPDATE employer SET nom = ?, prenom = ?, contact = ?, sexe = ?, poste = ?, salaire = ? WHERE id = ?', $val);

        if ($req) {
            $successMsg = '
            <div class="alert alert-success"><i class="bi bi-check-lg"></i> Votre traitemment a été effectué avec succès</div>
            ';
        } else {
            $errorMsg = '
            <div class="alert alert-danger"><i class="bi bi-x-lg"></i> Votre traitemment a échoué</div>
            ';
        }
    } else {
        $errorMsg = '
        <div class="alert alert-danger"><i class="bi bi-x-lg"></i> Vous renseigné tous les champs</div>';
    }
}
