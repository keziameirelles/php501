<?php

class conectaDB{
    public function __construct($server, $user, $pass){
        //$server = 'mysql:host=localhost;dbname=blog';
        //$user = 'developer';
        //$pass = '4linux';
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;

        try{
            $conn = new PDO($this->server, $this->user, $this->pass);
            $this->conn = $conn;
        } catch (PDOException $e) {
            echo "Erro: {$e->getMessage()}";
        }
    }

    public function select($table){
        return $this->conn->query("select * from {$table}");
    }
}

$obj = new conectaDB('mysql:host=localhost;dbname=blog', 'developer', '4linux');
$q = $obj->select('usuarios');
foreach ($q as $row) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}