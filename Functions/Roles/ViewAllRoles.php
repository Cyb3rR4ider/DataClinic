<div class="container mt-5">
    <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΙΑΤΡΙΚΟΥ ΙΣΤΟΡΙΚΟΥ</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Κωδικός Ρόλου</th>
                <th>Περιγραφή Ρόλου</th>
                <th style="width: 250px">Λειτουργίες</th>
            </tr>
        </thead>
        <tbody>
        
                <?php
                $viewallroles = new Roles();
                $dataofroles =  $viewallroles->getAllroles();
                foreach($dataofroles as $row){
                    echo "<tr>";
                    echo "<td>" . $row->role_id . "</td>";
                    echo "<td>" . $row->role_desc . "</td>";

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