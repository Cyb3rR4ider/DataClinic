<?php
foreach($data_treatment as $usTreatment){
  $stored_tr_desc = $usTreatment->tr_desc;
  $stored_tr_st_dt = $usTreatment->tr_st_dt;
  $stored_tr_st_end = $usTreatment->tr_end_dt;
?>

<div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="treatment-tab">
<div class="card text-center">
  <div class="card-header">
    Χορήγηση Αγωγής για τον/την<?php echo ' '.$patient->pat_name .' '. $patient->pat_surname;?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Περιγραφή Αγωγής</h5>
    <p class="card-text"><?php echo $stored_tr_desc;?></p>
  </div>
  <div class="card-footer text-muted">
    <h7>Διάρκεια Αγωγής</h7> <br>
    <?php echo $stored_tr_st_dt .' TO '. $stored_tr_st_end;?>
  </div>
</div>

</div>

<?php }