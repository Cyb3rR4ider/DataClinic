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
            $appointments[$i]->app_pat_id = $row["app_tm_end"];
            $appointments[$i]->app_end = $row["app_pat_id"];
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
        $query = "INSERT INTO appointment(app_status, app_type, app_dt, app_tm_st, app_tm_end, app_pat_id) VALUES(?, ?, ?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->app_status, $this->app_type, $this->app_dt, $this->app_tm_st, $this->app_tm_end, $this->app_pat_id]);
    }
}
