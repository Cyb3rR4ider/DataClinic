<?php 
class Treatment {


    var $tr_id;
    var $tr_desc;
    var $tr_st_dt;
    var $tr_end_dt;
    var $tr_diag_id;

    public function __construct() {
        $this->tr_id=Null;
        $this->tr_desc=Null;
        $this->tr_st_dt=Null;
        $this->tr_end_dt=Null;
        $this->tr_diag_id=Null;
    }

}
