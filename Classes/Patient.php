<?php
class Patient{

   var $pat_id;
   var $pat_name;
   var $pat_surname;
   var $pat_apoint_valid;
   var $pat_address;
   var $pat_tel;
   var $pat_birth;
   var $pat_amk;

   public function __construct() {
    $this->pat_id = Null;
    $this->pat_name = Null;
    $this->pat_surname = Null;
    $this->pat_apoint_valid = Null;
    $this->pat_address = Null;
    $this->pat_tel = Null;
    $this->pat_birth = Null;
    $this->pat_amk = Null;

    }//end of construct
}