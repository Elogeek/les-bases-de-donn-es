<?php

//grâce à ça, on a qu'1 seule instance de connexion, donc plus léger = dév green !

class Utilisateurs {

    private PDO  $database;

    public function __construct(PDO $database) {
        $this->database = $database;
    }

    public function getUtilisateurs() {
        //la fct va aller chercher les utilisateurs en base de données
    }
}