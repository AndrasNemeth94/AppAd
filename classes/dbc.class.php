<?php

class Dbc{

    private $host="localhost";
    private $user="root";
    private $password="";
    private $dbName="usadv";

    protected function connect(){

        $dataSource = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dataSource,$this->user,$this->password);
        //opcionális
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}