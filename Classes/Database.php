<?php
class Database
{

    private $host; //h ip tou server ths bashs
    private $database; //h bash pou 8a doulepsoume
    private $user; //username
    private $pass; //password
    private $pdo;
    private $opt;

    public $onoma;

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

    //-----------------------------------Functions for Users----------------------------//
    function login(&$xrhsths)
    {
        $query = "SELECT `user_id`, `username` , `user_email`, `user_tel`, 
        `us_role_id` 
        FROM `users` 
        WHERE `username`= ? and `password`= ?;";
        $this->connect();
        $res = $this->execute($query, [$xrhsths->username, $xrhsths->password]);
        if ($res->rowCount() == 1) {
            $row = $res->fetch();
            $xrhsths->user_id = $row["user_id"];
            $xrhsths->username = $row["username"];
            $xrhsths->user_email = $row["user_email"];
            $xrhsths->user_tel = $row["user_tel"];
            $xrhsths->us_role_id = $row["us_role_id"];
        }
    } //end of login()

    function getAllUsers()
    {
        $this->connect();
        $A = new ArrayObject();
        $query = "SELECT `user_id`, `username`, 
        `user_email`, `user_tel`, `us_role_id` 
        FROM `users`;";
        $res = $this->execute($query, []);
        $i = 0;
        while ($row = $res->fetch()) {
            $A[$i] = new Users();
            $A[$i]->user_id = $row["user_id"];
            $A[$i]->username = $row["username"];
            $A[$i]->user_email = $row["user_email"];
            $A[$i]->user_tel = $row["user_tel"];
            $A[$i]->us_role_id = $row["us_role_id"];
            $i++;
        }
        return $A;
    } //end of getAllUsers()

    public function getUser(&$users)
    {
        $this->connect();
        $res = $this->execute("SELECT `user_id`, `username`, `user_email`, 
        `user_tel`, `us_role_id` 
        FROM `users` 
        WHERE `user_id`= ?;", [$users->user_id]);
        $row = $res->fetch();
        $users->username = $row['username'];
        $users->user_email = $row['user_email'];
        $users->us_role_id = $row['us_role_id'];
        $users->user_tel = $row['user_tel'];
        $users->user_id = $row['user_id'];
    }

    public function deleteUser($users) {
        $this->connect();
        $sql = "DELETE FROM `users` WHERE `user_id`=?;";
        $this->execute($sql, [$users->user_id]);
    }




    //-----------------------------------Functions for Doctors----------------------------//





}//end of class Database()