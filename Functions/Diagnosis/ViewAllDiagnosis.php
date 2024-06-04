<div class="container mt-5">
    <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΔΙΑΓΝΩΣΕΩΝ</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Κωδικός Διάγνωσης</th>
                <th>Ημερομηνια Διάγνωσης</th>
                <th>Περιγραγή Διάγνωσης</th>
                <th>Όνομα Γιατρού</th>
                <th>Κωδικός Ασθένους</th>
                <th style="width: 250px">Λειτουργίες</th>
            </tr>
        </thead>
        <tbody>
        
                <?php
                $diagnosi = new Diagnosis();
                $dataofdiagnosis = $diagnosi->getAllDiagnosis();
                foreach($dataofdiagnosis as $row){
                    echo "<tr>";
                    echo "<td>" . $row->diag_id . "</td>";
                    echo "<td>" . $row->diag_dt . "</td>";
                    echo "<td>" . $row->diag_desc . "</td>";
                    echo "<td>" . $row->doctor_name . "</td>";
                    echo "<td>" . $row->diag_pat_id . "</td>";
                
                ?>
                    <td>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=29">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddiag" value="<?php echo $row->diag_id?>" readonly>
                            <button type="submit" title="Διαγραφή Διάγνωσης" class="btn btn-danger btn-primary">
                                <i class="fa fa-trash"></i></button>
                        </form>

                    </td>
                <?php

                    echo ('</tr>');
                }
                ?>


    </table>
</div>