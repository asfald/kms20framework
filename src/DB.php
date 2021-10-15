<?php

namespace App;

use PDO;

class DB
{
    private $conn;

    public function __construct($databasePath){
        $this->conn = new PDO("sqlite:" . $databasePath);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function select($columns, $table, $className=null){
        $columnsString = implode(', ', $columns); // ['id', 'body', 'title'] => "id, body, title"
        $stmt = $this->conn->prepare("SELECT $columnsString FROM $table");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}