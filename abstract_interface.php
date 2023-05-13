<?php

abstract class Database
{
    public $conn;
    public $sname='localhost';
    public $uname='root';
    public $password='';
    public $dbname ='fermano';
    
    public function __construct()
    {
        $this->conn = new mysqli($this->sname, $this->uname, $this->password);      
    }

    abstract public function createDB(): string;
    
}

class Students extends Database
{
    public function createDB(): string
    {
        $db = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($db);
    }
}

$d = new Students;
$d->createDB();