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
    } //end of construct

    function login(){
        $bash=new Database();
        $bash->login($this);
    }

    function getAllUsers(){
        $bash=new Database();
        $bash->getAllUsers();
    }

    function getUser() {
        $DB = new Database();
        $DB->getUser($this);
    }

    function deleteUser() {
        $DB = new Database();
        $DB->deleteUser($this);
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
    function updatePasswordUser($password) {
        $query = "UPDATE users SET password = ? WHERE user_id = ?;";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $database = new Database();
        $database->connect();
        $success = $database->execute($query, [$hashed_password, $this->user_id]);
    
        if ($success) {
            echo "Επιτυχής αλλαγή κωδικού πρόσβασης!";
        } else {
            echo "Κάτι πήγε στραβά. Δοκιμάστε ξανά αργότερα.";
        }
    }
    
    


}//End of Users Class