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
