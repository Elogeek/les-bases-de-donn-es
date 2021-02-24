<?php

//grâce à ça, on a qu'1 seule instance de connexion, donc plus léger = dév green !

class UtilisateursStatics {

    public function getUtilisateurs() {
        //la fct va aller chercher les utilisateurs en base de données
        $this->dblink = DB::getInstance();
    }
}