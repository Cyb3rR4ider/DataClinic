<?php
class Patient
{

    var $pat_id;
    var $pat_name;
    var $pat_surname;
    var $pat_apoint_valid;
    var $pat_address;
    var $pat_tel;
    var $pat_birth;
    var $pat_amk;

    public function __construct()
    {
        $this->pat_id = Null;
        $this->pat_name = Null;
        $this->pat_surname = Null;
        $this->pat_apoint_valid = Null;
        $this->pat_address = Null;
        $this->pat_tel = Null;
        $this->pat_birth = Null;
        $this->pat_amk = Null;
    }

    function getAllPatients()
    {
        /* Get all the Patient from the database and return them in array full of objects for each */
        $patients = new ArrayObject();
        $query = "SELECT * FROM patient";
        $database = new Database();
        $data = $database->execute($query, []);
        $i = 0;
        while ($row = $data->fetch()) {
            $patients[$i] = new Patient();
            $patients[$i]->pat_id = $row["pat_id"];
            $patients[$i]->pat_name = $row["pat_name"];
            $patients[$i]->pat_surname = $row["pat_surname"];
            $patients[$i]->pat_apoint_valid = $row["pat_apoint_valid"];
            $patients[$i]->pat_address = $row["pat_address"];
            $patients[$i]->pat_tel = $row["pat_tel"];
            $patients[$i]->pat_birth = $row["pat_birth"];
            $patients[$i]->pat_amk = $row["pat_amk"];
            $i++;
        }

        return $patients;
    }

   

    function getPatient()
    {
         
        $query = "SELECT  * FROM patient WHERE pat_id = ?;";
        $database = new Database();
        $database->connect();
        $patient = $database->execute($query, [$this->pat_id]);

        return $patient;
    }

    function updatePatient()
    {
        /* Update a Patient in the database */
        $query = "UPDATE from patient 
        SET pat_name = ?, pat_surname = ?, pat_apoint_valid = ?, 
        pat_address = ?, pat_tel = ?, pat_birth = ?, pat_birth = ?, pat_amk = ?
        WHERE pat_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [
            $this->pat_name, $this->pat_surname,
            $this->pat_apoint_valid, $this->pat_address, $this->pat_tel, $this->pat_birth, $this->pat_amk, $this->pat_id
        ]);
    }

    function insertPatient()
    {
        /* Insert a Patient in the database */
        $query = "INSERT INTO patient(pat_name, pat_surname, pat_apoint_valid, pat_address, pat_tel, pat_birth, pat_amk) VALUES(?, ?, ?, ?, ?, ?, ?";
        $database = new Database();
        $database->connect();
        $database->execute($query, [
            $this->pat_name, $this->pat_surname,
            $this->pat_apoint_valid, $this->pat_address, $this->pat_tel, $this->pat_birth, $this->pat_amk
        ]);
    }
}