<?php
if (isset($_POST['passidview'])) {
    $patient = new Patient();
    $patient_id_input = $_POST['passidview']; //store patient_id from ΠΡΟΒΟΛΗ ΑΣΘΕΝΩΝ
    $patient->pat_id = $patient_id_input; //pass patient id
    $patient->getPatient();

    $diag = new Diagnosis();
    $diag->diag_pat_id = $patient_id_input; //pass patient id
    $diag->getDiagnosis();

    

?>  
    <!-- TABS START-->
    
    <?php include("Pat_Includes/Inc_Pat_Tabs.php");?>

    <!-- TABS END-->
    <div class="container mt-5">

    
    <div class="tab-content" id="myTabContent">
        
        <!-- Ραντεβού -->
        
        <?php include("Pat_Includes/Inc_Pat_Apoint.php");?>

        <!-- Διάγνωση -->
        
        <?php include("Pat_Includes/Inc_Pat_Diag.php");?>
        
        <!-- Αγωγή -->                                           
        
        <?php include("Pat_Includes/Inc_Pat_Treat.php");?>

        <!-- Επικοινωνία -->
        
        <?php include("Pat_Includes/Inc_Pat_Contact.php");?>

    </div>
    </div>

<?php } ?>