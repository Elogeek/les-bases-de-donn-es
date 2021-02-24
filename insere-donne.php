<?php
ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);

require 'DB/versionStatic.php';
$db = DB::getInstance();

$userRequest = "INSERT INTO user (email, username, password) VALUES ('testok@exemple.com', 'moi', 'azerty')";

if($db->exec($userRequest)) {
    echo $db->lastInsertId();

    //lastInsertId() permet de trouver le dernier id enregistré
    //pour revenir à 0, il faut faire un TRUNCATE sur la table
    //Nota Bene : en languague SQL, l'Id est un numéro unique qui peut varier, ce n'est pas un identifiant comme le CSS par exemple

    $userId = $db->lastInsertId();
    $articleRequest = "INSERT INTO article (titre, contenu, user_fk) VALUES ('un titre', 'un contenu', $userId)";
    $db->exec($articleRequest);
};
