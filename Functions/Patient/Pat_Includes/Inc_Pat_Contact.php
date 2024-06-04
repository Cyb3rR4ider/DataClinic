<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="display:flex; justify-content:center">
    <!-- <h2>Επικοινωνία</h2>
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
    </div> -->

    <div class="card" style="width: 25rem ; height:42rem; border-radius:5px;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Στοιχεία</h5>
            <p class="card-text">Όνοματεπώνυμο Ασθενούς</p>
            <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php echo $patient->pat_name . ' ' . $patient->pat_surname; ?>" readonly>
            <br>
            <p class="card-text">Ημερομηνία Γέννησης Ασθενούς</p>
            <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php $correctDate = date("d-m-Y", strtotime($patient->pat_birth)); echo $correctDate; ?>" readonly>
            <br>
            <p class="card-text">Διεύθυνση Ασθενούς</p>
            <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php echo $patient->pat_address . ' ' . $patient->pat_surname; ?>" readonly>
            <br>
            <p class="card-text">Τηλέφωνο</p>
            <input type="text" class="form-control" id="patient-tel" name="patient-tel" value="<?php echo $patient->pat_tel; ?>" readonly>
            <br>
            <p class="card-text">ΑΜΚ Ασθενούς</p>
            <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php echo $patient->pat_amk; ?>" readonly>
            <br>
            <p class="card-text">Αξιοπιστία</p>
            <input type="text" class="form-control" id="patient-name" name="patient-name" value="<?php if ($patient->pat_apoint_valid == 0) { $x = "Εμπιστος"; }  else { $x = "Aνέντιμος";}
            echo $x; ?>" readonly>
            <br>

            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
</div>
</div>

