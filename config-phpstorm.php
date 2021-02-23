<?php

require './versionStatic.php';
$db = DB2::getInstance();

$requeteSQL = "INSERT INTO démo relation.user(id, nom, prenom, password) VALUES ()";
//cliquer database, cliquer +, cliquer sur datasource puis mysql puis advanced puis rechercher servertimezone  mot de passe: UTC

$db->exec($requeteSQL);