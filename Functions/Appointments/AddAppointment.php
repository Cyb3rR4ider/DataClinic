<?php 
if(!isset($_POST['sub-btn'])){
?>
<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΟΥ ΡΑΝΤΕΒΟΥ</h2>
    <form action="" method="post">
        
        <div class="form-group">
            <label for="app-type">Είδος Ραντεβού:</label>
            <select class="form-control" id="role" name="app-type" required>
                <option value="normal">Κανονικό Ραντεβού</option>
                <option value="emergency">Επείγον Ραντεβού</option>
            </select>
        </div>

        <div class="form-group">
            <label for="app-status">Κατάσταση Ραντεβού:</label> 
            <select class="form-control" id="app-status" name="app-status" required>
                <option value="1">Σε Ισχύ</option>
                <option value="0">Έχει περάσει</option>
            </select>
        </div>

        <div class="form-group">
            <label for="app-dt">Ημερομηνία Ραντεβού:</label>
            <input type="date" class="form-control" id="app-dt" name="app-dt" required>
        </div>
        
        <div class="form-group">
            <label for="app-tm-td"> 'Ωρα Έναρξης Ραντεβού:</label>
            <input type="time" class="form-control" id="app-tm-td" name="app-tm-dt" required>
        </div>
        
        <div class="form-group">
            <label for="app-tm-end">'Ωρα Λήξης Ραντεβού:</label>
            <input type="time" class="form-control" id="app-tm-end" name="app-tm-end" required>
        </div>

        <div class="form-group">
            <label for="app-pat-id">Patient ID:</label>
            <input type="number" class="form-control" id="app-pat-id" name="app-pat-id">
        </div>

        <button type="submit" name="sub-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>
<?php } else {
    $rantebou = new Appointments();
    $rantebou->app_status = $_POST['app-status'];
    $rantebou->app_type = $_POST['app-type'];
    $rantebou->app_dt = $_POST['app-dt'];
    $rantebou->app_tm_st = $_POST['app-tm-dt'];
    $rantebou->app_tm_end = $_POST['app-tm-end'];
    $rantebou->app_pat_id = $_POST['app-pat-id'];
    $rantebou->insertAppointment();

}
