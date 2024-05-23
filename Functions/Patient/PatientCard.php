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

    $appointment = new Appointments();
    $appointment->app_pat_id = $patient_id_input;
    $data_apointment = $appointment->getAppointment();
    // while($res = $data_apointment->fetch()){
        
    //     $app_id_stored = $appointment->app_id = $res['app_id'];
    //     $app_stored = $appointment->app_status = $res['app_status'];
    //     $app_type_stored = $appointment->app_type =$res['app_type'];
    //     $app_dt_stored = $appointment->app_dt = $res['$app_dt_stored'];
    //     $app_time_st_stored = $appointment->app_tm_st = $res['app_tm_st'];
    //     $app_time_end_stored = $appointment->app_tm_end = $res['app_tm_end'];
    //     $app_pat_id_stored = $appointment->app_pat_id = $res['app_pat_id'];

    // }    
    } 
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