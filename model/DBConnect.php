<?php

namespace model;

use PDO;

class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=product";
        $this->username = "root";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            return $conn;
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMEssage();
        }
    }

}