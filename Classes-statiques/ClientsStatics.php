<?php

class ClientsStatic {
    private PDO $db;

    public function getClients() {
        //la fct va aller chercher les utilisateurs en base de données
        $this->dblink = DB::getInstance();
    }
}