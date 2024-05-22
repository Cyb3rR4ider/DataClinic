<div class="tab-pane fade" id="diagnosis" role="tabpanel" aria-labelledby="diagnosis-tab">
    <h2>Διάγνωση</h2>

    <div class="form-group">
        <label for="diagnosis-date">Ημερομηνία Διάγνωσης</label>
        <input type="text" class="form-control" id="diagnosis-date" name="diagnosis-date" value="<?php echo $diag->diag_dt; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="doctor-name">Όνομα Γιατρού</label>
        <input type="text" value="<?php echo $diag->doctor_name; ?>" class="form-control" id="doctor-name" name="doctor-name" placeholder="Εισάγετε το όνομα του γιατρού" readonly>
    </div>
    <div class="form-group">
        <label for="diagnosis-details">Λεπτομέρειες Διάγνωσης</label>
        <!-- <textarea class="form-control" id="diagnosis-details" name="diagnosis-details" rows="4" placeholder="Εισάγετε τις λεπτομέρειες της διάγνωσης" readonly><?php echo $diag->diag_desc; ?></textarea> -->
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Ημερομηνία Διαγνώσης</th>
      <th scope="col">Λεπτομέρειες Διαγνώσης</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
    echo "<tr>";

    echo "<td>". $diag->diag_dt."</td?>" ;
    echo "<td>".$diag->diag_desc."</td?>" ;
      
        

    echo "</tr>";
  ?>
      </tbody>
</table>
    </div>

</div>