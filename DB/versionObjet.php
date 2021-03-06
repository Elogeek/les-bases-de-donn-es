<?php
class DB2 {
    //déclaration des propriétés
    private string $server;
    private string $db;
    private string $user;
    private string $pwd;
    private ?PDO $dbLink;

    /**
     * DB constructor
     * @param string $serv
     * @param string $db
     * @param string $user
     * @param string $pwd
     *
     */
    public function __construct(string $serv,string  $db, string $user, string $pwd) {
        $this->server = $serv;
        $this->db = $db;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbLink = $this->connect();
    }

    /**
     * connexion à la base de données
     * @return PDO|null
     */
    private function connect() : ?PDO {
        try {

            $bdd = new PDO("mysql:host=$this->server;dbname = $this->db;charset=utf8",$this->user,$this->pwd);
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception) {
            echo $exception->getMessage();
            return null;
        }
        return $bdd;

    }

    /**
     * retourne l'objet PDO
     */
    public function getDbLink(): ?PDO {
        if(is_null($this->dbLink)) {
            $this->dbLink = $this->connect();
        }
        return $this->dbLink;
    }
}