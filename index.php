<?php
require 'versionObjet.php';
require './Classes/Utilisatuers.php';
require './Classes/Clients.php';
require 'versionStatic.php';
require './Classes-statiques/ClientsStatics.php';
require  './Classes-statiques/UtilisatuersStatics.php';

//création de la connexion à la base de données (2 méthodes)
$database = new DB('localhost','live','root', ''); //1) 1 méthode
$link = $database->getDblink();// 2) lien de la base de données

$utilisateurs = new Utilisateurs($link);
$clients = new Clients($link);

$UtilisateursStatics = new UtilisateursStatics();
$ClientsStatics = new ClientsStatic();