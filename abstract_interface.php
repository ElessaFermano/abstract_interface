<?php

abstract class Database
{
    public $conn;
    public $sname='localhost';
    public $uname='root';
    public $password='';
    public $dbname = 'fermano';
    
    public function __construct($conn){
        $this->conn = new mysqli($this->sname, $this->uname, $this->password);
        $db = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        $this->conn->query($db);

        var_dump($db);
    }

    abstract public function insert() : string;
    
}

// class Students extends Database
// {
//     public function insert()
//     {
//         return "Elessa";
//     }

// }