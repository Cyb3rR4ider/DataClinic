<h2>ΠΡΟΒΟΛΗ ΟΛΩΝ ΤΩΝ ΡΑΝΤΕΒΟΥ</h2>
<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Pat ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $DB = new Database();
                    $DB->connect();
                    $res = $DB->execute("SELECT `app_id`, `app_status`, 
                        `app_type`, `app_dt`,`app_tm_st`,
                        `app_tm_end`, `app_pat_id`
                        FROM `appointments`;", []);
                    while ($row = $res->fetch()) {
                        echo "<tr>";
                        echo "<td class='smaller-space'>" . $row['app_id'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['app_status'] . "</td>";
                        echo "<td class='smaller-space'>" . $row['app_type'] . "</td>";
                        echo "<td class='smaller-space'>". $row["app_dt"] . "</td>";
                        echo "<td class='smaller-space'>". $row["app_tm_st"] . "</td>";
                        echo "<td class='smaller-space'>". $row["app_tm_end"] . "</td>";
                        echo "<td class='smaller-space'>" . $row['app_pat_id'] . "</td>";
                    ?>
                     <td class="btn-group">
                        <form method="post" action="index.php?action=9">
                            <input type="hidden" name="passiddel" value="<?php echo $row['app_id'] ?>">
                            <button type="submit" class="btn btn-danger" title="Διαγραφή Ραντεβού">
                                <i class="fa fa-trash"></i>
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