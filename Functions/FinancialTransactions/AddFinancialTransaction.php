<?php 
if(!isset($_POST['sub-btn'])){
?>
<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΑΣ ΠΛΗΡΩΜΗΣ</h2>
    <form action="" method="post">

        <div class="form-group">
            <label for="fin-tr-dt">Ημερομηνία Πληρωμής:</label>
            <input type="date" class="form-control" id="fin-tr-dt" name="fin-tr-dt">
        </div>

        <div class="form-group">
            <label for="fin-tr-type">Είδος Πληρωμής</label>:</label>
            <input type="text" class="form-control" id="fin-tr-type" name="fin-tr-type" required>
        </div>

        <div class="form-group">
            <label for="fin-tr-amount">Ποσό Πληρωμής</label>:</label>
            <input type="number" class="form-control" id="fin-tr-amount" name="fin-tr-amount" required>
        </div>

        <div class="form-group">
            <label for="fin-tr-patid">Κωδικός Ασθενούς</label>:</label>
            <input type="number" class="form-control" id="fin-tr-patid" name="fin-tr-patid" required>
        </div>
        
        <button type="submit" name="sub-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>
<?php } else {
    $fin = new Financial_transactions();
    $fin->fin_tr_dt = $_POST['fin-tr-dt'];
    $fin->fin_tr_type = $_POST['mdr-tr-type'];
    $fin->fin_tr_amount = $_POST['fin-tr-amount'];
    $fin->fin_pat_id = $_POST['fin-tr-patid'];

    $fin->insertFinancialTransaction();
    header("Location: index.php?action=26");
    echo "Επιτυχής Εισαγωγη";

}
