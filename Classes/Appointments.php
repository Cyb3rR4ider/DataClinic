<?php
class Appointments
{
    var $app_id;
    var $app_status;
    var $app_type;
    var $app_dt;
    var $app_tm_st;
    var $app_tm_end;
    var $app_pat_id;

    public function __construct()
    {
        $this->app_id = NULL;
        $this->app_status = NULL;
        $this->app_type = NULL;
        $this->app_dt = NULL;
        $this->app_tm_st = NULL;
        $this->app_tm_end = NULL;
        $this->app_pat_id = NULL;
    }

    function getAllAppointments()
    {
        /* Search the database and retrieve all the users, we return them as objects to use them in the front-end*/
        $appointments = new ArrayObject();
        $query = "SELECT * FROM `appointments`;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, []);
        $i = 0;
        while ($row = $data->fetch()) {
            $appointments[$i] = new Appointments();
            $appointments[$i]->app_id = $row["app_id"];
            $appointments[$i]->app_status = $row["app_status"];
            $appointments[$i]->app_type = $row["app_type"];
            $appointments[$i]->app_dt = $row["app_dt"];
            $appointments[$i]->app_tm_st = $row["app_tm_st"];
            $appointments[$i]->app_tm_end = $row["app_tm_end"];
            $appointments[$i]->app_pat_id = $row["app_pat_id"];
            $i++;
        }

        return $appointments;
    }

    function deleteAppointment()
    {
        /* Delete appointment based on the ID */
        $query = "DELETE from appointments where app_id = ?;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, [$this->app_id]);
    }

    function updateAppointment()
    {
        /* Update appointment based the ID */
        $query = "UPDATE appointments 
        SET app_status = ?, app_type = ?, app_dt = ?, app_tm_st = ?, app_tm_end = ?, app_pat_id = ?
        WHERE app_id = ?;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, [$this->app_status, $this->app_type, $this->app_dt, $this->app_tm_st, $this->app_tm_end, $this->app_pat_id, $this->app_id]);
    }

    function insertAppointment()
    {
        /* Insert appointment */
        $query = "INSERT INTO appointments(app_status, app_type, app_dt, app_tm_st, app_tm_end, app_pat_id) VALUES(?, ?, ?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->app_status, $this->app_type, $this->app_dt, $this->app_tm_st, $this->app_tm_end, $this->app_pat_id]);
    }
    function getAppointment()
    {
         
        $query = "SELECT * FROM appointments WHERE app_pat_id = ?;";
        $database = new Database();
        $database->connect();
        $appoint = $database->execute($query, [$this->app_pat_id]);

        return $appoint;
    }

    function status($x){
        if($x == 1){
           return "Εκρεμμες";
        }return "Ολοκληρωμένο";
    } 

    function comparedates($app_date){
        $today = new DateTime();
        $today->setTime(0,0,0);
        $appointmentDate = Datetime::createFromFormat('Y-m-d H:i:s',$app_date);
        $appointmentDate->setTime(0,0,0);
       
        if($today>$appointmentDate){
            //$this->update_appointment_status();
            // $updateQuerytoZero = "UPDATE appointments SET app_status = 0 WHERE app_id = ?;";
            // $database->execute($updateQuerytoZero, [$this->app_id]);
            
            return "Το ραντεβού έχει περάσει";
        }
        else if ($today == $appointmentDate){
            return "Το ραντεβού είναι σήμερα";
        }else {
            //$this->update_appointment_status();
            // $updateQuerytoOne = "UPDATE appointments SET app_status = 1 WHERE app_id = ?;";
            // $database->execute($updateQuerytoOne, [$this->app_id]);
            
            $internal = $today->diff($appointmentDate);
            $daystogo = $internal->days;
            return "Απομενουν $daystogo μέρες για το ραντεβού";
        }

    }

   public function update_appointment_status() {
        $database = new Database();
        $updateQuery = 
            
        "UPDATE appointments
            SET app_status = CASE
                WHEN CURDATE() > app_dt THEN 0
                ELSE 1
            END";
        $database->execute($updateQuery, []);
    }


    function appointmentsDaysPassed($app_id){
        $query = "SELECT (CURRENT_DATE > app_dt) as daysago FROM `appointments` WHERE app_id = ?;";
        $database = new Database();
        $database->connect();
        $appoint_days_passed = $database->execute($query, [$this->app_pat_id]);
        while($row = $appoint_days_passed->fetch()){
            $app = $row;
            $appsep = implode(",",$app); // convert the object to string 
        }

        return $appsep;
    }

    
}