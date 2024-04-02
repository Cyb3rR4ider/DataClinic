<h2>ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΧΡΗΣΤΩΝ</h2>
<table>
    <thead>
        <tr style="background-color:   #6699ff">


            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Τηλέφωνο</th>
            <th>Patient_ID</th>
            <th>Role_ID</th>
            <th style="width: 250px">Λειτουργίες</th>


        </tr>
    </thead>
    <tbody>
        <tr style="">
            <?php
            require_once("../../Classes/Database.php");
            $DB = new Database();
            $DB->connect();
            $res = $DB->execute("SELECT `user_id`, `username`, 
                `user_email`, `user_tel`, `us_pat_id`, `us_role_id` 
                FROM `users`;", []);
            while ($row = $res->fetch()) {
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['user_email'] . "</td>";
                echo "<td>" . $row['user_tel'] . "</td>";
                echo "<td>" . $row['us_pat_id'] . "</td>";
                echo "<td>" . $row['us_role_id'] . "</td>";
           
           echo('</tr>'); 
        }
            ?>


</table>