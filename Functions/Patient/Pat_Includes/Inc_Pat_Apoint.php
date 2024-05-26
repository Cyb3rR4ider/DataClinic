<div class="tab-pane fade show active" id="appointments" role="tabpanel" aria-labelledby="appointments-tab">

 <?php  
       
        
    while($res = $data_apointment->fetch()){
        
        $app_id_stored = $appointment->app_id = $res['app_id'];
        $app_status_stored = $appointment->app_status = $res['app_status'];
        $app_type_stored = $appointment->app_type =$res['app_type'];
        $app_dt_stored = $appointment->app_dt = $res['app_dt'];
        $app_time_st_stored = $appointment->app_tm_st = $res['app_tm_st'];
        $app_time_end_stored = $appointment->app_tm_end = $res['app_tm_end'];
        $app_pat_id_stored = $appointment->app_pat_id = $res['app_pat_id'];

        $checkStatus = $appointment->status($app_status_stored);
        $daysBefore = $appointment->appointmentsDaysPassed($app_id_stored);
        $daytoapp = $appointment->comparedates($app_dt_stored);
        

?>
    

<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card">
        <class="card-body">
        <h5 class="card-title" style="text-align:center;">Ραντεβου</h5>
        <p class="card-text"> Κωδικός Ραντεβού</p>
        <input type="text" class="form-control" id="app-id" name="app-id" value="<?php echo $app_id_stored; ?>" readonly>
        <br>
        <p class="card-text">Κατάσταση</p>
        <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php echo $checkStatus; ?>" readonly>
        <br>
        <p class="card-text">Προτεραιότητα</p>
        <input type="text" class="form-control" id="patient-address" name="patient-address" value="<?php echo $app_type_stored;?>" readonly>
        <br>
        <p class="card-text">Ημερομηνία και Ώρα</p>
        <input type="text" class="form-control" id="patient-address" name="patient-address" value="<?php echo $app_dt_stored; ?>" readonly>
        <br>
        <p class="card-text">Ωρα (Αρχή)</p>
        <input type="text" class="form-control" id="patient-address" name="patient-address" value="<?php echo $app_time_st_stored?>" readonly>
        <br>
        <p class="card-text">Ωρα (Τέλος)</p>
        <input type="text" class="form-control" id="patient-address" name="patient-address" value="<?php echo $app_time_end_stored; ?>" readonly>
        <br>
        <p class="card-text" style="color: crimson;"><?php echo $daytoapp;?></p>
        
        
        
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
   <?php echo "<br> <br>"; }?>
    
</div>