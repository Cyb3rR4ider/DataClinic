<?php
if (!isset($_POST['DelFt'])) {
    $treatProsDiagrafh=new Treatment();
    $treatProsDiagrafh->tr_id=$_POST['passidtreat'];
    $treatProsDiagrafh->deleteTreatment();
    ?>

<h2 class="danger">ΠΡΟΣΟΧΗ ΘΑ ΔΙΑΓΡΑΨΕΙΣ ΘΕΡΑΠΕΙΑ:</h2>
<?php
echo $treatProsDiagrafh->tr_id;
?>
        <form action="" method="post">
            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidtreat" value="<?php echo $treatProsDiagrafh->tr_id ?>" readonly>
                <button class="btn btn-danger"  type="submit" name="DelFt" id="DelDiag" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Θεραπείας</button>
                <button class="btn btn-info" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
        </form>
<?php
}
else{//μολις πατηθεί το κουμπί διαγραφής
    $tr=new Treatment();
    $tr->tr_id=$_POST['passidtreat'];
    $tr->deleteTreatment();
    header("Location: index.php?action=24");
    echo "Επιτυχης Διαγραφη";

}
