<?php
class Clients {

    private PDO  $database;

    public function __construct(PDO $database) {
        $this->database = $database;
    }

    public function getClients() {
        //la fct va aller chercher les utilisateurs en base de données
    }
}