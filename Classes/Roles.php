<?php

class Roles
{
    var $role_id;
    var $role_desc;

    public function __construct()
    {
        $this->role_id = Null;
        $this->role_desc = Null;
    }

    function getRole()
    {
        $query = "SELECT role_desc FROM roles where role_id = ?;";
        $database = new Database();
        $database->connect();
        $role = $database->execute($query, [$this->role_id]);
        return $role;
    }
}
