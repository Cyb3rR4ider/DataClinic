<?php
class Users
{
    var $user_id;
    var $username;
    var $password;
    var $user_email;
    var $user_tel;
    var $us_role_id;

    public function __construct()
    {
        $this->user_id = NULL;
        $this->username = NULL;
        $this->password = NULL;
        $this->user_email = NULL;
        $this->user_tel = NULL;
        $this->us_role_id = NULL;
    }

    function login($password)
    {
        /* Search in the database the user that match the username - password and retrieve all the information
            to fill the object with them, so we can use them in the authentication. */
        $query = "SELECT `user_id`, `username` , `user_email`, `user_tel`, 
        `us_role_id`, `password`
        FROM `users` 
        WHERE `username`= ?";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, [$this->username]);
        $row = $data->fetch();
        if (password_verify($password, $row["password"])) {
            $this->user_id = $row["user_id"];
            $this->username = $row["username"];
            $this->user_email = $row["user_email"];
            $this->user_tel = $row["user_tel"];
            $this->us_role_id = $row["us_role_id"];
        }
    }

    function getAllUsers()
    {
        /* Search all the users and return them as arraylist of objects. */
        $users = new ArrayObject();
        $query = "SELECT `user_id`, `username`, 
        `user_email`, `user_tel`, `us_role_id` 
        FROM `users`;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, []);
        $i = 0;
        while ($row = $data->fetch()) {
            $users[$i] = new Users();
            $users[$i]->user_id = $row["user_id"];
            $users[$i]->username = $row["username"];
            $users[$i]->user_email = $row["user_email"];
            $users[$i]->user_tel = $row["user_tel"];
            $users[$i]->us_role_id = $row["us_role_id"];
            $i++;
        }
        return $users;
    }

    function deleteUser()
    {
        /* Delete a user based on the ID */
        $query = "DELETE from users where user_id = ?";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->user_id]);
    }

    function updateUser()
    {
        /* Update user based on the ID */
        $query = "Update users SET username = ?, user_email = ?, user_tel = ?, us_role_id = ?, password = ? where user_id = ?";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->username, $this->user_email, $this->user_tel, $this->us_role_id, $this->password, $this->user_id]);
    }

    function insertUser()
    {
        /* Insert new user */
        $query = "INSERT INTO users(username, password, user_email, user_tel, us_role_id) VALUES (?, ?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->username, $this->password, $this->user_email, $this->user_tel, $this->us_role_id]);
    }
}
