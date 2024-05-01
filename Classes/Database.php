<?php
class Database
{

    private $host; //h ip tou server ths bashs
    private $database; //h bash pou 8a doulepsoume
    private $user; //username
    private $pass; //password
    private $pdo;
    private $opt;



    public function __construct()
    {
        $this->host = "127.0.0.1:3306";
        $this->database = "drappdb";
        $this->user = "root";
        $this->pass = "";
    }
    public function connect()
    {
        $this->opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => FALSE];
        $conString = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8";
        $this->pdo = new PDO($conString, $this->user, $this->pass, $this->opt);
    }
    public function execute($sql, $array)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array);
        return $stmt;
    }
}