<?php
class Diagnosis {

    var $diag_id;
    var $diag_dt;
    var $diag_desc;
    var $doctor_name;
    var $diag_pat_id;

    public function __construct() {
        $this->diag_id = NULL;
        $this->diag_dt = NULL;
        $this->diag_desc = NULL;
        $this->doctor_name = NULL;
        $this->diag_pat_id = NULL;
    }
}