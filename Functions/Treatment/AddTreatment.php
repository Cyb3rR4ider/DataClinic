<?php 
if(!isset($_POST['sub-btn'])){
?>
<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΑΣ ΘΕΡΑΠΕΙΑΣ</h2>
    <form action="" method="post">

        <div class="form-group">
            <label for="tr-desc">Περιγραφή Θεραπείας:</label>
            <input type="text" class="form-control" id="tr-desc" name="tr-desc">
        </div>

        <div class="form-group">
            <label for="tr-dt-st">Ημερομηνία Έναρξης</label>:</label>
            <input type="date" class="form-control" id="tr-dt-st" name="tr-dt-st" required>
        </div>

        <div class="form-group">
            <label for="tr-dt-end">Ημερομηνια Τέλους Θεραπείας</label>:</label>
            <input type="date" class="form-control" id="tr-dt-end" name="tr-dt-end" required>
        </div>

        <div class="form-group">
            <label for="tr-diag-id">Κωδικός Διάγνωσης</label>:</label>
            <input type="number" class="form-control" id="tr-diag-id" name="tr-diag-id" required>
        </div>
        
        <button type="submit" name="sub-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>
<?php } else {
    $treat = new Treatment();
    $treat->tr_desc = $_POST['tr-desc'];
    $treat->tr_st_dt = $_POST['tr-dt-st'];
    $treat->tr_end_dt = $_POST['tr-dt-end'];
    $treat->tr_diag_id = $_POST['tr-diag-id'];

    $treat->insertTreatment();
    header("Location: index.php?action=24");
    echo "Επιτυχής Εισαγωγη";

}
