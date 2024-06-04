<?php
class Treatment
{


    var $tr_id;
    var $tr_desc;
    var $tr_st_dt;
    var $tr_end_dt;
    var $tr_diag_id;

    public function __construct()
    {
        $this->tr_id = Null;
        $this->tr_desc = Null;
        $this->tr_st_dt = Null;
        $this->tr_end_dt = Null;
        $this->tr_diag_id = Null;
    }

    function getAllTreatments()
    {   $treatment = new ArrayObject();
        $i=0;
        $query = "SELECT * FROM treatment;";
        $database = new Database();
        $database->connect();
        $data_treatment = $database->execute($query, []);
        while ($row = $data_treatment->fetch()) {
            $treatment[$i] = new Treatment();
            $treatment[$i]->tr_id = $row["tr_id"];
            $treatment[$i]->tr_desc = $row["tr_desc"];
            $treatment[$i]->tr_st_dt = $row["tr_st_dt"];
            $treatment[$i]->tr_end_dt = $row["tr_end_dt"];
            $treatment[$i]->tr_diag_id = $row["tr_diag_id"];
        
            $i++;
        }
        return $treatment;
    }


    function getTreatment()
    {   $treatment = new ArrayObject();
        $i=0;
        $query = "SELECT * FROM treatment WHERE tr_diag_id = ?;";
        $database = new Database();
        $database->connect();
        $data_treatment = $database->execute($query, [$this->tr_diag_id]);
        while ($row = $data_treatment->fetch()) {
            $treatment[$i] = new Treatment();
            $treatment[$i]->tr_id = $row["tr_id"];
            $treatment[$i]->tr_desc = $row["tr_desc"];
            $treatment[$i]->tr_st_dt = $row["tr_st_dt"];
            $treatment[$i]->tr_end_dt = $row["tr_end_dt"];
            $treatment[$i]->tr_diag_id = $row["tr_diag_id"];
        
            $i++;
        }
        return $treatment;
    }

    function searchTreatments($name)
    {
        $query = "SELECT * FROM treatment WHERE tr_id LIKE '%$name%' 
        or tr_desc LIKE '%$name%'
        or tr_st_dt LIKE '%$name%'
        or tr_end_dt LIKE '%$name%' 
        or tr_diag_id like '%$name%';";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query,[]);
        return $data;

    }

    function deleteTreatment()
    {
        /* Delete a treatment from the database */
        $query = "DELETE FROM treatment WHERE tr_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->tr_id]);
    }

    function updateTreatment()
    {
        /* Update a treatment in the database */
        $query = "UPDATE treatment SET tr_desc = ?, tr_st_dt = ?, tr_end_dt = ?, tr_diag_id = ? WHERE tr_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->tr_desc, $this->tr_st_dt, $this->tr_end_dt, $this->tr_diag_id, $this->tr_id]);
    }

    function insertTreatment()
    {
        /* Insert a treatment in the database */
        $query = "INSERT INTO treatment(tr_desc, tr_st_dt, tr_end_dt, tr_diag_id) VALUES(?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->tr_desc, $this->tr_st_dt, $this->tr_end_dt, $this->tr_diag_id]);
    }
}
