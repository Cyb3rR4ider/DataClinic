<?php
class Diagnosis
{

    var $diag_id;
    var $diag_dt;
    var $diag_desc;
    var $doctor_name;
    var $diag_pat_id;

    public function __construct()
    {
        $this->diag_id = NULL;
        $this->diag_dt = NULL;
        $this->diag_desc = NULL;
        $this->doctor_name = NULL;
        $this->diag_pat_id = NULL;
    }

    function getDiagnosis(){
        
        $diagnosis = new ArrayObject();
        $query = "SELECT * FROM diagnosis WHERE diag_pat_id = ?;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, [$this->diag_pat_id]);
        $i = 0;
        while ($row = $data->fetch()) {
            $diagnosis[$i] = new Diagnosis();
            $diagnosis[$i]->diag_id = $row["diag_id"];
            $diagnosis[$i]->diag_dt = $row["diag_dt"];
            $diagnosis[$i]->diag_desc = $row["diag_desc"];
            $diagnosis[$i]->doctor_name = $row["doctor_name"];
            $diagnosis[$i]->diag_pat_id = $row["diag_pat_id"];
            $i++;
        }
        return $diagnosis;
        
    }

    function searchDiagnosis()
    {
        /* Search all the Diagnosis based on the patient ID */
        $diagnosis = new ArrayObject();
        $query = "SELECT * from diagnosis where diag_pat_id = ?;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, [$this->diag_pat_id]);
        $i = 0;
        while ($row = $data->fetch()) {
            $diagnosis[$i] = new Diagnosis();
            $diagnosis[$i]->diag_id = $row["diag_id"];
            $diagnosis[$i]->diag_dt = $row["diag_dt"];
            $diagnosis[$i]->diag_desc = $row["diag_desc"];
            $diagnosis[$i]->doctor_name = $row["doctor_name"];
            $diagnosis[$i]->diag_pat_id = $row["diag_pat_id"];
            $i++;
        }

        return $diagnosis;
    }

    function deleteDiagnosis()
    {
        /* Delete Diagnosis from the database */
        $query = "DELETE FROM diagnosis where diag_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->diag_id]);
    }

    function updateDiagnosis()
    {
        /* Update Diagnosis in the database */
        $query = "UPDATE diagnosis SET diag_dt =?, diag_desc = ?, doctor_name = ?, diag_pat_id = ? WHERE diag_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->diag_dt, $this->diag_desc, $this->doctor_name, $this->diag_pat_id, $this->diag_id]);
    }

    function insertDiagnosis()
    {
        /* Insert new Diagnosis in the database */
        $query = "INSERT INTO diagnosis(diag_dt, diag_desc, doctor_name, diag_pat_id) VALUES(?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->diag_dt, $this->diag_desc, $this->doctor_name, $this->diag_pat_id]);
    }
}