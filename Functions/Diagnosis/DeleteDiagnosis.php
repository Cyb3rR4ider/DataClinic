<?php
if (!isset($_POST['DelDiag'])) {
    $diagnosiProsDiagrafh=new Diagnosis();
    $diagnosiProsDiagrafh->diag_id=$_POST['passiddiag'];
    $diagnosiProsDiagrafh->getDiagnosis();
    ?>

<h2 class="danger">ΠΡΟΣΟΧΗ ΘΑ ΔΙΑΓΡΑΨΕΙΣ ΔΙΑΓΝΩΣΗ:</h2>
<?php
echo $diagnosiProsDiagrafh->diag_id;
?>
        <form action="" method="post">
            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddiag" value="<?php echo $diagnosiProsDiagrafh->diag_id ?>" readonly>
                <button class="btn btn-danger"  type="submit" name="DelDiag" id="DelDiag" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Ραντεβού</button>
                <button class="btn btn-info" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
        </form>
<?php
}
else{//μολις πατηθεί το κουμπί διαγραφής
    $deletedDiag=new Diagnosis();
    $deletedDiag->diag_id=$_POST['passiddiag'];
    $deletedDiag->deleteDiagnosis();
    header("Location: index.php?action=23");
    echo "Επιτυχης Διαγραφη";

}