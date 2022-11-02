<?php

use DevNonwaKone\Database;

require_once '../Class/Database.php';

$db = new Database();

if (isset($_GET['id'])) {
    $id = htmlentities($_GET['id']);

    $db->delete($id);

    header('Location: ../public/index.php');
} else {
    echo 'ERREUR';
}
