<div class="container mt-5">
    <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΘΕΡΑΠΕΙΩΝ</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Κωδικός Θεραπείας</th>
                <th>Περιγραφή Θεραπείας</th>
                <th>Ημερομηνια Αρχής Θεραπείας</th>
                <th>Ημερομηνια Τέλους Θεραπείας</th>
                <th>Κωδικός Διάγνωσης</th>
                <th style="width: 250px">Λειτουργίες</th>
            </tr>
        </thead>
        <tbody>
        
                <?php
                $viewalltreatment = new Treatment();
                $dataoftreatment = $viewalltreatment->getAllTreatments();
                foreach($dataoftreatment as $row){
                    echo "<tr>";
                    echo "<td>" . $row->tr_id . "</td>";
                    echo "<td>" . $row->tr_desc . "</td>";
                    echo "<td>" . $row->tr_st_dt . "</td>";
                    echo "<td>" . $row->tr_end_dt . "</td>";
                    echo "<td>" . $row->tr_diag_id. "</td>";
                
                ?>
                    <td>
                       <form style="float: left; padding: 2px;" method="post" action="index.php?action=">  <!-- μην ξεχάσω να βαλω action -->
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddel" value="<?php echo $row->tr_id ?>" readonly>
                            <button type="submit" title="Διαγραφή Θεραπείας" class="btn btn-danger btn-primary">
                                <i class="fa fa-trash"></i></button>
                        </form>

                    </td>
                <?php

                    echo ('</tr>');
                }
                ?>


    </table>
</div>