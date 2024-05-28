<?php require_once "../../Classes/Database.php";
require_once "../../Classes/Medical_Record.php" ?>
<?php
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $mdr = new Medical_record();
    $data = $mdr->searchMedicalRecords($search);
    if ($data->rowCount() > 0) {
?>
<div class="container mt-5">
    <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΙΑΤΡΙΚΟΥ ΙΣΤΟΡΙΚΟΥ</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Κωδικός Ιατρικού Ιστορικού</th>
                <th>Περιγραφή Ιατρικού Ιστορικού</th>
                <th>Κωδικός Ασθενούς</th>
                <th style="width: 250px">Λειτουργίες</th>
            </tr>
        </thead>
        <tbody>
        
                <?php
                $viewallmedicalrecord = new Medical_record();
                $dataofmedicalrecord =  $viewallmedicalrecord->searchMedicalRecords($search);
                while($row = $dataofmedicalrecord->fetch()){
                    echo "<tr>";
                    echo "<td>" . $viewallmedicalrecord->mdr_id = $row['mdr_id'] . "</td>";
                    echo "<td>" . $viewallmedicalrecord->mdr_desc = $row['mdr_desc'] . "</td>";
                    echo "<td>" . $viewallmedicalrecord->mdr_pat_id = $row['mdr_pat_id'] . "</td>";
                    
                
                ?>
                    <td>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=30">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddelmd" value="<?php echo $viewallmedicalrecord->mdr_id?>" readonly>
                            <button type="submit" title="Διαγραφή Ιατρικου Ιστορικού" class="btn btn-danger btn-primary">
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