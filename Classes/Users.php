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

}//End of Users Class