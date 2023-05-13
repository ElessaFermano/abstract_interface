<?php

interface StudentList
{
    public function createTB();
}

abstract class Database
{
    public $conn;
    public $sname='localhost';
    public $uname='root';
    public $password='';
    public $dbname ='fermano';
    public $tblname = 'Students';
    
    public function __construct()
    {
        $this->conn = new mysqli($this->sname, $this->uname, $this->password);      
    }

    abstract public function createDB(): string;
    
}

class Students extends Database implements StudentList
{
    public function createDB(): string
    {
        $db = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        return $this->conn->query($db);
    }

    public function createTB()
   {
      $tb = "CREATE TABLE IF NOT EXISTS $this->tblname";
      return $this->conn->query($tb);
   }
}

$d = new Students;
$d->createDB();
$d->createTB();