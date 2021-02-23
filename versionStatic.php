<?php
class DB2 {
    private string $server = 'localhost';
    private string $db = 'live';
    private string $user = 'root';
    private string $pwd = '';

    private static PDO $dbInstance;

    /**
     * db/DB = data base
     * DbStatic constructor
     */
    public function __construct() {
        try {

            self::$dbInstance = new PDO("mysql:host=$this->server;dbname = $this->db;charset=utf8", $this->user, $this->pwd);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception) {
             echo $exception->getMessage();
        }
    }
    /**
     *retourne une instance de l'objet PDO
     */
    public static function getInstance(): ?PDO {
        if (is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }
    /**
     * on empêche de laisser d'autres développeurs de cloner l'objet
     * pour s'assurer qu'on a bel et bien qu'une seule instance de la connexion db
     */
    public function __clone() {}

}
