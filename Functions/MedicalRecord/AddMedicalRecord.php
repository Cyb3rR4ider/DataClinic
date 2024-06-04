<?php 
if(!isset($_POST['sub-btn'])){
?>
<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΟΥ ΙΑΤΡΙΚΟΥ ΙΣΤΟΡΙΚΟΥ</h2>
    <form action="" method="post">

        <div class="form-group">
            <label for="mdr-desc">Περιγραφή Ιατρικού Ιστορικού:</label>
            <input type="text" class="form-control" id="mdr-desc" name="mdr-desc">
        </div>

        <div class="form-group">
            <label for="mdr-pat-id">Κωδικός Ασθενούς</label>:</label>
            <input type="text" class="form-control" id="doctor-name" name="mdr-pat-id" required>
        </div>

        <button type="submit" name="sub-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>
<?php } else {
    $mdr = new Medical_record();
    $mdr->mdr_desc = $_POST['mdr-desc'];
    $mdr->mdr_pat_id = $_POST['mdr-pat-id'];
    
    $mdr->insertMedicalRecord();
    header("Location: index.php?action=25");
    echo "Επιτυχής Εισαγωγη";

}
