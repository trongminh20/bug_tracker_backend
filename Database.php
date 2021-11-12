<?php
class Database{
    public $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
}