<?php require_once "../../Classes/Database.php";
require_once "../../Classes/Appointments.php" ?>
<?php
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $app = new Appointments();
    $data = $app->searchAppointment($search);
    if ($data->rowCount() > 0) {
?>
<div class="container mt-5">
<h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΡΑΝΤΕΒΟΥ</h2>
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Ραντεβού</th>
                        <th>Κατάσταση</th>
                        <th>Βαρύτητα Ραντεβού</th>
                        <th>Ημερομηνια Ραντεβού</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Pat ID</th>
                        <th>Ενέργειες</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $app = new Appointments();
                $data = $app->searchAppointment($search); 
                    while ($row = $data->fetch()) {
                        echo "<tr>";
                        echo "<td class='smaller-space'>" . $row['app_id'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['app_status'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['app_type'] . "</td>";
                        echo "<td class='smaller-space'>". $row["app_dt"] . "</td>";
                        echo "<td class='smaller-space'>". $row["app_tm_st"] . "</td>";
                        echo "<td class='smaller-space'>". $row["app_tm_end"] . "</td>";
                        echo "<td class='smaller-space'>" . $row['app_pat_id'] . "</td>";
                    ?>
                     <td class="btn-group">
                        <form method="post" action="index.php?action=9">
                            <input type="hidden" name="passiddel" value="<?php echo $row['app_id'] ?>">
                            <button type="submit" class="btn btn-danger" title="Διαγραφή Ραντεβού">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    <?php
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php } else {

}

}