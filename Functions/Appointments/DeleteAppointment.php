<?php
if (!isset($_POST['DelApp'])) {
    $rantevouProsDiagrafh=new Appointments();
    $rantevouProsDiagrafh->app_id=$_POST['passiddel'];
    $rantevouProsDiagrafh->getAppointment();
    ?>

<h2 class="danger">ΠΡΟΣΟΧΗ ΘΑ ΔΙΑΓΡΑΨΕΙΣ ΡΑΝΤΕΒΟΥ:</h2>
<?php
echo $rantevouProsDiagrafh->app_id;
?>
        <form action="" method="post">
        <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddel" value="<?php echo $rantevouProsDiagrafh->app_id ?>" readonly>
            <button class="btn btn-danger"  type="submit" name="DelUser" id="DelUser" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Ραντεβού</button>
            <button class="btn btn-info" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>

        </form>
<?php
}
else{//μολις πατηθεί το κουμπί διαγραφής
    $deletedApp=new Appointments();
    $deletedApp->app_id=$_POST['passiddel'];
    $deletedApp->deleteAppointment();
   

}