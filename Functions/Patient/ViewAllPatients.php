<h2>ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΑΣΘΕΝΩΝ</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pat ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Validation</th>
                        <th>Address</th>
                        <th>Birth Date</th>
                        <th>Telephone</th>
                        <th>AMKA</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $DB = new Database();
                    $DB->connect();
                    $res = $DB->execute("SELECT `pat_id`, `pat_name`, 
                        `pat_surname`, `pat_apoint_valid`,`pat_address`,
                        `pat_tel`, `pat_birth`, `pat_amk` 
                        FROM `patient`;", []);
                    while ($row = $res->fetch()) {
                        echo "<tr>";
                        echo "<td class='smaller-space'>" . $row['pat_id'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['pat_name'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['pat_surname'] . "</td>";
                        echo "<td class='smaller-space'>". $row["pat_apoint_valid"] . "</td>";
                        echo "<td class='smaller-space'>". $row["pat_address"] . "</td>";
                        echo "<td class='smaller-space'>". $row["pat_birth"] . "</td>";
                        echo "<td class='smaller-space'>" . $row['pat_tel'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['pat_amk'] . "</td>";
                    ?>
                    <td class="btn-group">
                        <form method="post" action="index.php?action=5">
                            <input type="hidden" name="passidview" value="<?php echo $row['pat_id'] ?>">
                            <button type="submit" class="btn btn-info" title="Προβολή Ασθενή">
                                <i class="fa fa-eye"></i>
                            </button>
                        </form>
                        <form method="post" action="index.php?action=6">
                            <input type="hidden" name="passidres" value="<?php echo $row['pat_id'] ?>">
                            <button type="submit" class="btn btn-success" title="Reset Password">
                                <i class="fa fa-undo"></i>
                            </button>
                        </form>
                    </td>
                    <?php
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>