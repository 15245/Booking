<?php

require_once ROOT_PATH . '/config/db.php';

/**
 * Class db
 * Gère l'instanciation et le passage de requêtes à la base de données
 */
class db
{
    private $config;

    private $dbInstance = null;

    private static $instance;

    private function __construct()
    {
        $this->config = dbConfig();

        $this->dbInstance = new mysqli(
            $this->config['host'],
            $this->config['username'],
            $this->config['password'],
            $this->config['dbname']
        );

        if ($this->dbInstance->connect_errno) {
            throw new Exception("Echec lors de la connexion à MySQL : (" . $this->dbInstance->connect_errno . ") " . $this->dbInstance->connect_error);
        }
    }

    /**
     * @return db
     */
    public static function getInstance()
    {
        if (is_null(self::$instance))
        {
            self::$instance = new db();
        }

        return self::$instance;
    }

    public function query($query)
    {
        return $this->dbInstance->query($query);
    }

    public function prepare($query)
    {
        return $this->dbInstance->prepare($query);
    }


    public function getLastError()
    {
        return $this->dbInstance->error;
    }
}