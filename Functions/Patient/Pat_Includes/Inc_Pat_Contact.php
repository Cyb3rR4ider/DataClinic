<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <h2>Επικοινωνία</h2>
    <div class="form-group">
        <label for="patient-tel">Τηλέφωνο Επικοινωνίας</label>
        <input type="text" class="form-control" id="patient-tel" name="patient-tel" value="<?php echo $patient->pat_tel; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="patient-name">Όνοματεπώνυμο Ασθενούς</label>
        <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php echo $patient->pat_name . ' ' . $patient->pat_surname; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="patient-surname">Επίθετο</label>
        <input class="form-control" id="patient-surname" name="patient-surname" value="<?php echo $patient->pat_surname; ?>" readonly>
    </div>
</div>