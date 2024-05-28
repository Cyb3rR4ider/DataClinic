<?php
if (!isset($_POST['DelFt'])) {
    $fintrProsDiagrafh=new Financial_transactions();
    $fintrProsDiagrafh->fin_tr_id=$_POST['passidfin'];
    $fintrProsDiagrafh->deleteFinancialTransaction();
    ?>

<h2 class="danger">ΠΡΟΣΟΧΗ ΘΑ ΔΙΑΓΡΑΨΕΙΣ ΠΛΗΡΩΜΗ:</h2>
<?php
echo $fintrProsDiagrafh->fin_tr_id;
?>
        <form action="" method="post">
            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidfin" value="<?php echo $fintrProsDiagrafh->fin_tr_id ?>" readonly>
                <button class="btn btn-danger"  type="submit" name="DelFt" id="DelDiag" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Πληρωμής</button>
                <button class="btn btn-info" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
        </form>
<?php
}
else{//μολις πατηθεί το κουμπί διαγραφής
    $fin=new Financial_transactions();
    $fin->fin_tr_id=$_POST['passidfin'];
    $fin->deleteFinancialTransaction();
    header("Location: index.php?action=26");
    echo "Επιτυχης Διαγραφη";

}
