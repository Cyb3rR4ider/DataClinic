<?php require_once "../../Classes/Database.php";
require_once "../../Classes/Diagnosis.php" ?>
<?php
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $diag = new Diagnosis();
    $data = $diag->searchDiagnosis($search);
    if ($data->rowCount() > 0) {
?>
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
                $dataofdiagnosis = $diagnosi->searchDiagnosis($search);
                while($row = $dataofdiagnosis->fetch()){
                    echo "<tr>";
                    echo "<td>" .$diagnosi->diag_id = $row['diag_id'] . "</td>";
                    echo "<td>" . $diagnosi->diag_dt = $row['diag_dt'] . "</td>";
                    echo "<td>" . $diagnosi->diag_desc = $row['diag_desc'] . "</td>";
                    echo "<td>" . $diagnosi->doctor_name = $row['doctor_name'] . "</td>";
                    echo "<td>" . $diagnosi->diag_pat_id = $row['diag_pat_id'] . "</td>";
                
                ?>
                    <td>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=29">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddiag" value="<?php echo $diagnosi->diag_id ?>" readonly>
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
<?php } else {

            }
        }