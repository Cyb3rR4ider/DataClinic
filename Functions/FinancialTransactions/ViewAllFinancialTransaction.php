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
                $dataofFin = $viewallFin->getallFinancialTransactions();
                foreach($dataofFin as $row){
                    echo "<tr>";
                    echo "<td>" . $row->fin_tr_id . "</td>";
                    echo "<td>" . $row->fin_tr_dt . "</td>";
                    echo "<td>" . $row->fin_tr_type . "</td>";
                    echo "<td>" . $row->fin_tr_amount . "</td>";
                    echo "<td>" . $row->fin_pat_id. "</td>";
                
                ?>
                    <td>
                        <form style="float: left; padding: 2px;" method="post" action="">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddel" value="" readonly>
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