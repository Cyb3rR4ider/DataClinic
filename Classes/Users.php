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

    function getUser(&$user_id)
    {
        $query = "SELECT  * FROM users WHERE user_id = ?;";
        $database = new Database();
        $database->connect();
        $user_data = $database->execute($query, [$this->user_id]);
        
        while($row = $user_data->fetch()){
            $this->user_id = $row['user_id'];
            $this->username = $row['username'];
            $this->user_email = $row['user_email'];
            $this->user_tel = $row['user_tel'];
            $this->us_role_id = $row['us_role_id'];
        }
    }

    function deleteUser()
    {
        /* Delete a user based on the ID */
        $query = "DELETE from users where user_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->user_id]);
    }
    function updateUser()
    {
        try {
            /* Update user based on the ID */
            $query = "Update users SET username = ?, user_email = ?, user_tel = ?, us_role_id = ?, password = ? where user_id = ?";
            $database = new Database();
            $database->connect();
            $x= $database->execute($query, [$this->username, $this->user_email, $this->user_tel, $this->us_role_id, $this->password, $this->user_id]);
            if($x){
                //$_SESSION['status'] = 'Επιτυχής Εισαγωγή';
                echo "<h1> Ενημέρωση Επιτυχης</h1>";
            }else {
                die('Κάτι πήγε στραβά');
            } 
        } catch (Exception $e) {
            echo "<h1>Ανεπιτυχής Ενημέρωση</h1>"; // .$e->getMessage();
               
        }
    }

    function insertUser($username, $password, $email, $telephone, $us_role_id)
    {
        /* Insert new user */
        $query = "INSERT INTO users(username, password, user_email, user_tel, us_role_id) VALUES (?, ?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $success = $database->execute($query, [$username, $hashed_password, $email, $telephone, $us_role_id]);
        return $success; // Return success status (true or false)
    }

    function updatePasswordUser($password)
    {
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

    function searchUser($name){
        $query = "SELECT * FROM users WHERE username LIKE '$name%'
        or us_role_id LIKE '%$name%' 
        or user_tel LIKE '$name%' 
        or user_email like '%$name%'; ";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query,[]);
        return $data;
    }
}//End of Users Class