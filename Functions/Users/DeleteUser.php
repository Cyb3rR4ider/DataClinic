<?php
if (!isset($_POST['DelUser'])) {
    $xrhsthsProsDiagrafh=new Users();
    $xrhsthsProsDiagrafh->user_id=$_POST['passiddel']; //παιρνει το user_id που το πηρε μολις πατηθηκε το κουμπι που το εχει στο value
    $xrhsthsProsDiagrafh->getAllUsers(); // φερνει τον user  με το id που πηρε 
    ?>

<h2 class="danger">ΠΡΟΣΟΧΗ ΘΑ ΔΙΑΓΡΑΨΕΙΣ ΤΟΝ ΧΡΗΣΤΗ:</h2>

<?php
echo $xrhsthsProsDiagrafh->username; //δειχνει το username που θελουμε να διαγραψουμε
?>
        <form action="" method="post">
        <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddel" value="<?php echo $xrhsthsProsDiagrafh->user_id ?>" readonly>
            <button class="btn btn-danger"  type="submit" name="DelUser" id="DelUser" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Χρήστη</button>
            <button class="btn btn-info" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'Index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>

        </form>
<?php
}
else{//μολις πατηθεί το κουμπί διαγραφής
    $deletedUser=new Users();
    $deletedUser->user_id=$_POST['passiddel'];
    $deletedUser->deleteUser();
   

}