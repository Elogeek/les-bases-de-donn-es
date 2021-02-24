<?php
//où comme ça
//$server ='localhost';
//$db = "live";
//$user = 'root';
//$pass =''; //pas de mot de passe sur la machine

try {
    $server ='localhost';
    $db = "live";
    $user = 'root';
    $pass =''; //pas de mot de passe sur la machine

    $bdd = new PDO("mysql:host=$server;dbname = $db;charset=utf8",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Nous sommes connectés à la base de données.";
}
catch(PDOException $exception) {
    echo $exception->getMessage();
}
