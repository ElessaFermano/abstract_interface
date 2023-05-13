<?php

abstract class Database
{
    public $conn;
    public $sname='localhost';
    public $uname='root';
    public $password='';
    public $dbname='fermano';
    
    public function __construct($conn){
        $this->conn = new mysqli($this->sname, $this->uname, $this->password);

    }

    abstract public function insert() : string;
    
}

class Students extends Database
{
    public function insert()
    {

    }

}