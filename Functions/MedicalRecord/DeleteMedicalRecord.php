<?php
if (!isset($_POST['DelDiag'])) {
    $medicalRecordProsDiagrafh=new Medical_record();
    $medicalRecordProsDiagrafh->mdr_id=$_POST['passiddelmd'];
    $medicalRecordProsDiagrafh->getallMedicalRecords();
    ?>

<h2 class="danger">ΠΡΟΣΟΧΗ ΘΑ ΔΙΑΓΡΑΨΕΙΣ ΙΑΤΡΙΚΟ ΙΣΤΟΡΙΚΟ:</h2>
<?php
echo $medicalRecordProsDiagrafh->mdr_id;
?>
        <form action="" method="post">
            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddelmd" value="<?php echo $medicalRecordProsDiagrafh->mdr_id ?>" readonly>
                <button class="btn btn-danger"  type="submit" name="DelDiag" id="DelDiag" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Ιατρικού Ιστορικού</button>
                <button class="btn btn-info" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
        </form>
<?php
}
else{//μολις πατηθεί το κουμπί διαγραφής
    $deletedMedicalR=new Medical_record();
    $deletedMedicalR->mdr_id=$_POST['passiddelmd'];
    $deletedMedicalR->deleteMedicalRecord();
    header("Location: index.php?action=25");
    echo "Επιτυχης Διαγραφη";

}