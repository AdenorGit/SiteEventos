<?php

namespace App\Database;

require BASEDIR . "Settings/database.php";

class DbConnection
{
    private $db_hostname, $db_name, $db_username, $db_password, $db_charset, $conn;

    public function __construct()
    {
        $this->db_hostname = DB_HOSTNAME;
        $this->db_name = DB_NAME;
        $this->db_username = DB_USER;
        $this->db_password = DB_PASS;
        $this->db_charset = 'utf8mb4';

        $dsn = "mysql:host=$this->db_hostname;dbname=$this->db_name;charset=$this->db_charset";
        
        try {
            $this->conn = new \PDO($dsn, $this->db_username, $this->db_password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}