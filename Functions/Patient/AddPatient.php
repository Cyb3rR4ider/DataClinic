<?php 
if(!isset($_POST['submit-btn'])){
?>

<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΟΥ ΑΣΘΕΝΟΥΣ</h2>
    <form method="post">
        
        <div class="form-group">
            <label for="app-type">Όνομα:</label>
            <input type="text" class="form-control" id="pat-name" name="pat-name">
        </div>
        
        <div class="form-group">
            <label for="app-type">Επίθετο:</label>
            <input type="text" class="form-control" id="pat-surname" name="pat-surname">
        </div>
        
        <!-- <div class="form-group">
            <label for="pat-app-valid">Ραντεβού Ισχύς:</label>
            <input type="text" class="form-control" id="pat-app-valid" name="pat-app-valid">
        </div> -->
        <label for="pat-app-valid">Ραντεβού Ισχύς:</label>
        <div class="form-check">
            <input class="form-check-input" name="pat-app-valid" type="checkbox" value="1" id="flexCheckDefault" checked>
            <label class="form-check-label" for="flexCheckDefault">Ενεργό</label>  <br>    
        
            <input class="form-check-input" name="pat-app-valid" type="checkbox" value="0" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">Ανενεργό</label> 
        </div> <br>

        <div class="form-group">
            <label for="pat-address">Διεύθυνση Ασθενούς:</label>
            <input type="text" class="form-control" id="pat-address" name="pat-address">
        </div>

        <div class="form-group">
            <label for="pat-tel">Τηλέφωνο Ασθενούς:</label>
            <input type="text" class="form-control" id="pat-tel" name="pat-tel">
        </div>

        <div class="form-group">
            <label for="pat-birth">Ημερ Γέννησης:</label>
            <input type="text" class="form-control" id="pat-birth" name="pat-birth" placeholder="Year-Month-Date">
        </div>
        
        <div class="form-group">
            <label for="pat-amk">ΑΜΚΑ:</label>
            <input type="text" class="form-control" id="pat-amk" name="pat-amk">
        </div>

        <button type="submit" name="submit-btn" class="btn btn-primary">Υποβολή</button>
    
    </form>
</div>
<?php } else {
    $patient = new Patient();
    $name = $_POST['pat-name'];
    $surname = $_POST['pat-surname'];
    $appValid = $_POST['pat-app-valid'];
    $address = $_POST['pat-address'];
    $tel = $_POST['pat-tel'];
    $birth = $_POST['pat-birth'];
    $amk = $_POST['pat-amk'];
    
    $patient->pat_name = $name;
    $patient->pat_surname = $surname;
    $patient->pat_apoint_valid = $appValid;
    $patient->pat_address = $address;
    $patient->pat_tel = $tel;
    $patient->pat_birth = $birth;
    $patient->pat_amk = $amk;
        
    $patient->insertPatient();
    
    
    header("Location: ././index.php?action=7");
    
}?>

