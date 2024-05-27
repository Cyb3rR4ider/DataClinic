<?php 
if(!isset($_POST['sub-btn'])){
?>
<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΑΣ ΔΙΑΓΝΩΣΗΣ</h2>
    <form action="" method="post">

        <div class="form-group">
            <label for="diag-dt">Ημερομηνία και Ώρα Διάγνωσης:</label>
            <input type="date" class="form-control" id="diag-dt" name="diag-dt" required>
        </div>
        
        <div class="form-group">
            <label for="diag-desc">Περιγραφή Διάγνωσης:</label>
            <input type="text" class="form-control" id="diag-desc" name="diag-desc">
        </div>

        <div class="form-group">
            <label for="doctor-name">Όνομα Ιατρού</label>:</label>
            <input type="text" class="form-control" id="doctor-name" name="doctor-name" required>
        </div>

        <div class="form-group">
            <label for="diag-pat-id">Κωδικός Ασθενούς</label>:</label>
            <input type="text" class="form-control" id="diag-pat-id" name="diag-pat-id" required>
        </div>
        

        <button type="submit" name="sub-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>
<?php } else {
    $diagnosi = new Diagnosis();
    $diagnosi->diag_dt = $_POST['diag-dt'];
    $diagnosi->diag_desc = $_POST['diag-desc'];
    $diagnosi->doctor_name = $_POST['doctor-name'];
    $diagnosi->diag_pat_id = $_POST['diag-pat-id'];

    $diagnosi->insertDiagnosis();
    header("Location: index.php?action=23");
    echo "Επιτυχής Εισαγωγη";

}
