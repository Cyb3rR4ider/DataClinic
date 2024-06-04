<?php
if (isset($_POST['passidview'])) {
    $patient = new Patient();
    $patient_id_input = $_POST['passidview']; //store patient_id from ΠΡΟΒΟΛΗ ΑΣΘΕΝΩΝ
    $patient->pat_id = $patient_id_input; //pass patient id
    $patient->getPatient();
    

    $diag = new Diagnosis();
    $diag->diag_pat_id = $patient_id_input; //pass patient id
    $data_diagnosis = $diag->getDiagnosis();

    foreach($data_diagnosis as $dia){
        $doc_name = $dia->doctor_name;
        $diag_date = $dia->diag_dt;
        $diag_id_stored = $dia->diag_id;
    } 

    $appointment = new Appointments();
    $appointment->app_pat_id = $patient_id_input;
    $data_apointment = $appointment->getAppointment();

    $userTreatment = new Treatment();
    if(!empty($diag_id_stored)){
        $userTreatment->tr_diag_id = $diag_id_stored;
    }else {
        echo "Δεν υπαρχει διαθεσιμη αγωγη";
    }
    
    $data_treatment = $userTreatment->getTreatment(); 
    
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