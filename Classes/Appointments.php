<?php
class Appointments {
    var $app_id;
    var $app_status;
    var $app_type;
    var $app_dt;
    var $app_tm_st;
    var $app_tm_end;
    var $app_pat_id;

    public function __construct() {
        $this->app_id = NULL;
        $this->app_status = NULL;
        $this->app_type = NULL;
        $this->app_dt = NULL;
        $this->app_tm_st = NULL;
        $this->app_tm_end = NULL;
        $this->app_pat_id = NULL;
    }

}