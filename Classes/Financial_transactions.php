<?php

class Financial_transactions
{

    var $fin_tr_id;
    var $fin_tr_dt;
    var $fin_tr_type;
    var $fin_tr_amount;
    var $fin_pat_id;

    public function __construct()
    {
        $this->fin_tr_id = null;
        $this->fin_tr_dt = null;
        $this->fin_tr_type = null;
        $this->fin_tr_amount = null;
        $this->fin_pat_id = null;
    }

    function getallFinancialTransactions()
    {
        /* Search all the Financial Transactions based on the patient ID */
        $financial_transactions = new ArrayObject();
        $query = "SELECT * FROM financial_transactions;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, []);
        $i = 0;
        while ($row = $data->fetch()) {
            $financial_transactions[$i] = new Financial_transactions();
            $financial_transactions[$i]->fin_tr_id = $row["fin_tr_id"];
            $financial_transactions[$i]->fin_tr_dt = $row["fin_tr_dt"];
            $financial_transactions[$i]->fin_tr_type = $row["fin_tr_type"];
            $financial_transactions[$i]->fin_tr_amount = $row["fin_tr_amount"];
            $financial_transactions[$i]->fin_pat_id = $row["fin_pat_id"];
            $i++;
        }
        return $financial_transactions;
    }


    function searchFinancialTransactions()
    {
        /* Search all the Financial Transactions based on the patient ID */
        $financial_transactions = new ArrayObject();
        $query = "SELECT * FROM financial_transactions WHERE fin_pat_id = ?;";
        $database = new Database();
        $database->connect();
        $data = $database->execute($query, [$this->fin_pat_id]);
        $i = 0;
        while ($row = $data->fetch()) {
            $financial_transactions[$i] = new Financial_transactions();
            $financial_transactions[$i]->fin_tr_id = $row["fin_tr_id"];
            $financial_transactions[$i]->fin_tr_dt = $row["fin_tr_dt"];
            $financial_transactions[$i]->fin_tr_type = $row["fin_tr_type"];
            $financial_transactions[$i]->fin_tr_amount = $row["fin_tr_amount"];
            $financial_transactions[$i]->fin_pat_id = $row["fin_pat_id"];
            $i++;
        }
        return $financial_transactions;
    }

    function deleteFinancialTransaction()
    {
        /* Delete a Financial Transactions from the database */
        $query = "DELETE FROM financial_transactions WHERE fin_tr_id = ?;";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->fin_tr_id]);
    }

    function updateFinancialTransaction()
    {
        /* Update a Financial Transactions in the database */
        $query = "UPDATE financial_transactions SET fin_tr_dt = ?, fin_tr_type = ?, fin_tr_amount = ?, fin_pat_id = ? WHERE fin_tr_id = ?";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->fin_tr_dt, $this->fin_tr_type, $this->fin_tr_amount, $this->fin_pat_id, $this->fin_tr_id]);
    }

    function insertFinancialTransaction()
    {
        /* Insert a new Financial Transactions in the database */
        $query = "INSERT INTO financial_transactions(fin_tr_dt, fin_tr_type, fin_tr_amount, fin_pat_id) VALUES(?, ?, ?, ?);";
        $database = new Database();
        $database->connect();
        $database->execute($query, [$this->fin_tr_dt, $this->fin_tr_type, $this->fin_tr_amount, $this->fin_pat_id]);
    }
}