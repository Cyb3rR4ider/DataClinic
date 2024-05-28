<?php require_once "../../Classes/Database.php";
require_once "../../Classes/Treatment.php" ?>
<?php
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $treat = new Treatment();
    $data = $treat->searchTreatments($search);
    if ($data->rowCount() > 0) {
?>
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
                $dataoftreatment = $viewalltreatment->searchTreatments($search);
                while($row = $dataoftreatment ->fetch()){
                    echo "<tr>";
                    echo "<td>" .$viewalltreatment->tr_id = $row['tr_id'] . "</td>";
                    echo "<td>" .$viewalltreatment->tr_desc = $row['tr_desc'] . "</td>";
                    echo "<td>" .$viewalltreatment->tr_st_dt = $row['tr_st_dt'] . "</td>";
                    echo "<td>" .$viewalltreatment->tr_end_dt = $row['tr_end_dt'] . "</td>";
                    echo "<td>" .$viewalltreatment->tr_diag_id = $row['tr_diag_id']. "</td>";
                
                ?>
                    <td>
                       <form style="float: left; padding: 2px;" method="post" action="index.php?action=35">  
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidtreat" value="<?php echo $viewalltreatment->tr_id; ?>" readonly>
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
         <?php   } else {

            }
        }