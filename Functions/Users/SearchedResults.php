<?php
include('C:\xampp\htdocs\Draapp_Git\DataClinic\Classes\Database.php');
include('C:\xampp\htdocs\Draapp_Git\DataClinic\Classes\Users.php');
if (isset($_POST['input'])) {  //value in POST come from ajax method as data option
    $search = $_POST['input'];
    $us1 = new Users();
    $data = $us1->searchUser($search);
    if ($data->rowCount() > 0) {
?>

        <table class="table table-striped">
            <thead>
            <tbody>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Τηλέφωνο</th>
                    <th>Role_ID</th>
                    <th style="width: 250px">Λειτουργίες</th>

                </tr>
                </thead>
            <tbody>
                <?php
                $us1 = new Users();
                $data = $us1->searchUser($search);
                foreach ($data as $row) {
                    echo "<td>" . $us1->user_id = $row['user_id'] . "</td>";
                    echo "<td>" . $us1->username = $row['username'] . "</td>";
                    echo "<td>" . $us1->user_email = $row['user_email'] . "</td>";
                    echo "<td>" . $us1->user_tel = $row['user_tel'] . "</td>";
                    echo "<td>" . $us1->us_role_id = $row['us_role_id'] . "</td>";
                 //   echo ("</tr>");
                
                ?>
                   <td>
                <form style ="float: left; padding: 2px;" method="post" action="index.php?action=4">
                    <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddel" value="<?php echo $row['user_id'] ?>" readonly>
                    <button type="submit" title="Διαγραφή Χρήστη" class="btn btn-danger btn-primary">
                        <i class="fa fa-trash"></i></button>
                </form>
                <form style ="float: left; padding: 2px;" method="post" action="index.php?action=5">
                    <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidview" value="<?php echo $row['user_id'] ?>" readonly>
                    <button type="submit" title="Προβολή Χρήστη" class="btn btn-info btn-primary">
                        <i class="fa fa-eye"></i></button>
                </form>
                <form style ="float: left; padding: 2px;" method="post" action="index.php?action=6">
                    <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidres" value="<?php echo $row['user_id'] ?>" readonly>
                    <button type="submit" title="Reset Password" class="btn btn-success btn-primary">
                        <i class="fa fa-undo"></i></button>
                </form>
                <form style ="float: left; padding: 2px;" method="post" action="index.php?action=11">
                    <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidupdate" value="<?php echo $row['user_id'] ?>" readonly>
                    <button type="submit" title="Edit User" class="btn btn-success btn-primary">
                    <i class="fa fa-pencil-square" aria-hidden="true"></i>

                </form>
                </td>
                <?php
                 echo ("</tr>");
                }
                ?>    
                
            </tbody>
            
        </table>
<?php
    } else {
        echo "<h4 class= 'text-danger text-center mt-3'>User Not Found</h4>";
    }
}
