<div class="tab-pane fade" id="diagnosis" role="tabpanel" aria-labelledby="diagnosis-tab">
    <h2 style="text-align: center;">Διάγνωση για τον <?php echo $patient->pat_name .' '. $patient->pat_surname?></h2>

    <!-- <div class="form-group">
        <label for="diagnosis-date">Ημερομηνία Διάγνωσης</label>
        <input type="text" class="form-control" id="diagnosis-date" name="diagnosis-date" value="" readonly>
    </div> -->
    <div class="form-group">
        <label for="doctor-name">Όνομα Γιατρού</label>
        <input type="text" value="<?php if(empty($doc_name)){echo "Δεν υπάρχει Γιάτρος";}else{echo $doc_name;}?>" class="form-control" id="doctor-name" name="doctor-name" readonly>
    </div>
    <div class="form-group">
        <label for="diagnosis-details">Λεπτομέρειες Διάγνωσης</label>
        <!-- <textarea class="form-control" id="diagnosis-details" name="diagnosis-details" rows="4" placeholder="Εισάγετε τις λεπτομέρειες της διάγνωσης" readonly><?php echo $diag->diag_desc; ?></textarea> -->
        <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Ημερομηνία Διαγνώσης</th> 
            <th scope="col">Περιγραφή Διαγνώσης</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach($data_diagnosis as $diagnosi){
            echo "<tr>";
            echo "<td>". $diagnosi->diag_dt."</td?>";
            echo "<td>". $diagnosi->diag_desc."</td?>";
            echo "</tr>";
          }?>
            </tbody>
      </table>
    </div>

</div>