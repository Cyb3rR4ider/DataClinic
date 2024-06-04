<?php require_once "../../Classes/Database.php";
require_once "../../Classes/Patient.php" ?>
<?php
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $pat = new Patient();
    $data = $pat->searchPatient($search);
    if ($data->rowCount() > 0) {
?>
<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-striped">
            <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΑΣΘΕΝΩΝ</h2>
            <thead>
                <tr>
                    <th>Pat ID</th>
                    <th>'Ονομα</th>
                    <th>Επώνυμο</th>
                    <th>Επικύρωση</th>
                    <th>Διεύθυνση</th>
                    <th>Ημερ Γέννησης</th>
                    <th>Τηλέφωνο</th>
                    <th>AMKA</th>
                    <th>Ενέργειες</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = $pat->searchPatient($search);

                while ($row = $res->fetch()) {
                    echo "<tr>";
                    echo "<td class='smaller-space'>" . $row['pat_id'] . "</td>";
                    echo "<td class='smaller-space'>" . $row['pat_name'] . "</td>";
                    echo "<td class='smaller-space'>" . $row['pat_surname'] . "</td>";
                    echo "<td class='smaller-space'>" . $row["pat_apoint_valid"] . "</td>";
                    echo "<td class='smaller-space'>" . $row["pat_address"] . "</td>";
                    echo "<td class='smaller-space'>" . $row["pat_birth"] . "</td>";
                    echo "<td class='smaller-space'>" . $row['pat_tel'] . "</td>";
                    echo "<td class='smaller-space'>" . $row['pat_amk'] . "</td>";
                ?>
                    <td class="btn-group">
                        <form method="post" action="index.php?action=13">
                            <input type="hidden" name="passidview" id="passidview" value="<?php echo $row['pat_id'] ?>">
                            <button type="submit" class="btn btn-info" title="Προβολή Ασθενή">
                                <i class="fa fa-eye"></i>
                            </button>
                        </form>
                        <form method="post" action="index.php?action=6">
                            <input type="hidden" name="passidres" value="<?php echo $row['pat_id'] ?>">
                            <button type="submit" class="btn btn-success" title="Reset Password">
                                <i class="fa fa-undo"></i>
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
</body>

</html>
         <?php   } else {

            }
        }