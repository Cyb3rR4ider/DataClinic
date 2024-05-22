    <div class="container mt-5">
    <h2 class="d-flex justify-content-center">ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΧΡΗΣΤΩΝ</h2>
    <table class="table table-striped">
        <thead>
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
            <tr>
                <?php
                $DB = new Database();
                $DB->connect();
                $res = $DB->execute("SELECT `user_id`, `username`, 
                `user_email`, `user_tel`,`us_role_id` 
                FROM `users`;", []);
                while ($row = $res->fetch()) {
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['user_email'] . "</td>";
                    echo "<td>" . $row['user_tel'] . "</td>";
                    echo "<td class='text-center'>" . $row['us_role_id'] . "</td>";
                ?>
                    <td>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=4">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passiddel" value="<?php echo $row['user_id'] ?>" readonly>
                            <button type="submit" title="Διαγραφή Χρήστη" class="btn btn-danger btn-primary">
                                <i class="fa fa-trash"></i></button>
                        </form>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=5">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidview" value="<?php echo $row['user_id'] ?>" readonly>
                            <button type="submit" title="Προβολή Χρήστη" class="btn btn-info btn-primary">
                                <i class="fa fa-eye"></i></button>
                        </form>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=6">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidres" value="<?php echo $row['user_id'] ?>" readonly>
                            <button type="submit" title="Reset Password" class="btn btn-success btn-primary">
                                <i class="fa fa-undo"></i></button>
                        </form>
                        <form style="float: left; padding: 2px;" method="post" action="index.php?action=11">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" type="text" name="passidupdate" value="<?php echo $row['user_id'] ?>" readonly>
                            <button type="submit" title="Edit User" class="btn btn-success btn-primary">
                                <i class="fa fa-pencil-square" aria-hidden="true"></i>

                        </form>
                    </td>
                <?php

                    echo ('</tr>');
                }
                ?>


    </table>
</div>