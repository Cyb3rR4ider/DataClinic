<?php
class Users
{
    var $user_id;
    var $username;
    var $password;
    var $user_email;
    var $user_tel;
    var $us_pat_id;
    var $us_role_id;

    public function __construct()
    {
        $this->user_id = NULL;
        $this->username = NULL;
        $this->password = NULL;
        $this->user_email = NULL;
        $this->user_tel = NULL;
        $this->us_pat_id = NULL;
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

}//End of Users Class