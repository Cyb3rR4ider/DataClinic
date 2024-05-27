<?php

class Roles{
    var $role_id;
    var $role_desc;

    public function __construct(){
        $this->role_id = Null;
        $this->role_desc = Null;
    }//end of construct

    function getAllroles(){
        $roles = new ArrayObject();
        $query = "SELECT * FROM roles;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, []);
        $i = 0;
        while ($row = $data->fetch()) {
            $roles[$i] = new Roles();
            $roles[$i]->role_id = $row["role_id"];
            $roles[$i]->role_desc = $row["role_desc"];
    
            $i++;
        }
        return $roles;
    }
}