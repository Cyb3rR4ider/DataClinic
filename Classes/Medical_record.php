<?php

class Medical_record
{
    var $mdr_id;
    var $mdr_desc;
    var $mdr_pat_id;

    public function __construct()
    {
        $this->mdr_id = null;
        $this->mdr_desc = null;
        $this->mdr_pat_id = null;
    }

    function getallMedicalRecords()
    {
        /* Search all the Medical Records based on the patient ID */
        $medical_records = new ArrayObject();
        $query = "SELECT * from medical_record;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, []);
        $i = 0;

        while ($row = $data->fetch()) {
            $medical_records[$i] = new Medical_record();
            $medical_records[$i]->mdr_id = $row["mdr_id"];
            $medical_records[$i]->mdr_desc = $row["mdr_desc"];
            $medical_records[$i]->mdr_pat_id = $row["mdr_pat_id"];
            $i++;
        }
        return $medical_records;
    }


    function searchMedicalRecords($name)
    {
        /* Search all the Medical Records based on the patient ID */
        $query = "SELECT * FROM medical_record WHERE mdr_id LIKE '%$name%' 
            or mdr_desc LIKE '$name%' 
            or mdr_pat_id like '%$name%'; ";
            $database = new Database();
            $database->connect();
            $data = $database->execute($query,[]);
            return $data;
    }

    function deleteMedicalRecord()
    {
        /* Delete a Medical Record from the database */
        $query = "DELETE FROM medical_record WHERE mdr_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->mdr_id]);
    }

    function updateMedicalRecord()
    {
        /* Update a Medical Record in the database */
        $query = "UPDATE medical_record SET mdr_desc = ?, mdr_pat_id = ? WHERE mdr_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->mdr_desc, $this->mdr_pat_id, $this->mdr_id]);
    }

    function insertMedicalRecord()
    {
        /* insert a Medical Record in the database */
        $query = "INSERT INTO medical_record(mdr_desc, mdr_pat_id) VALUES(?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->mdr_desc, $this->mdr_pat_id]);
    }
}