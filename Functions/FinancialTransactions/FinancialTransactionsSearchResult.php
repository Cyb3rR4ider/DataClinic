<?php require_once "../../Classes/Database.php";
require_once "../../Classes/Financial_transactions.php" ?>
<?php
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $fin = new Financial_transactions();
    $data = $fin->searchFinancialTransactions($search);
    if ($data->rowCount() > 0) {
?>
<div class="container mt-5">
    <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΠΛΗΡΩΜΩΝ</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Κωδικός Πληρωμής</th>
                <th>Ημερομηνία Πληρωμής</th>
                <th>Είδος Πληρωμής</th>
                <th>Ποσό Πληρωμής</th>
                <th>Κωδικός Ασθενή</th>
                <th style="width: 250px">Λειτουργίες</th>
            </tr>
        </thead>
        <tbody>
        
                <?php
                $viewallFin = new Financial_transactions();
                $dataofFin = $viewallFin->searchFinancialTransactions($search);
                while($row = $dataofFin->fetch()){
                    echo "<tr>";
                    echo "<td>" . $viewallFin->fin_tr_id = $row['fin_tr_id'] . "</td>";
                    echo "<td>" . $viewallFin->fin_tr_dt = $row['fin_tr_dt'] . "</td>";
                    echo "<td>" . $viewallFin->fin_tr_type = $row['fin_tr_type'] . "</td>";
                    echo "<td>" . $viewallFin->fin_tr_amount = $row['fin_tr_amount'] . "</td>";
                    echo "<td>" . $viewallFin->fin_pat_id = $row['fin_pat_id']. "</td>";
                
                ?>
                    <td>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=32">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidfin" value="<?php echo $viewallFin->fin_tr_id; ?>" readonly>
                            <button type="submit" title="Διαγραφή Πληρωμής" class="btn btn-danger btn-primary">
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