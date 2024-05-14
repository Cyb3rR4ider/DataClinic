
<?php
if (!isset($_POST['sent'])) {
    ?>

    <div id="SearchPart" class="col-lg-4">
        <h3>Αναζήτηση Χρήστη</h3>
        <form action="" method="post">
            <input type="hidden" value="1" name="sent">

            <div class="form-group">
                <label for="user_rank"> Βαθμός χρήστη</label>
                <input type="text" id="user_rank" name="user_rank"  class="form-control">
            </div>       

            <div class="form-group">
                <label for="user_title">Καθήκοντα Χρήστη</label>
                <input type="text" id="user_title" name="user_title"  class="form-control">
            </div> 
            <div class="form-group">
                <label for="user_first_name">Όνομα χρήστη</label>
                <input type="text" id="user_first_name" name="user_first_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="user_last_name">Επίθετο χρήστη</label>
                <input type="text" id="user_last_name" name="user_last_name" class="form-control">
            </div>    
            <div class="form-group">
                <label for="crew_of_pennant">Υπηρεσία</label>
                <input type="text" id="crew_of_pennant" name="crew_of_pennant" class="form-control">
            </div> 

            <div class="form-group">
                <label for="user_reg_num">Αριθμός μητρώου χρήστη</label>
                <input type="text" id="user_reg_num" name="user_reg_num" class="form-control">
            </div> 
            <div class="form-group">
                <label for="username">Username χρήστη</label>
                <input type="text" id="username" name="username" class="form-control">
            </div> 


            <div class="form-group">
                <label for="user_rights">Δικαιώματα Χρήστη</label>

                <select  class="form-control" id="user_rights" name="user_rights">
                    <?php
                    $getUserTypes = User_Types::getAll();
                    ?>
                    <option selected value=""> -- Επιλέξτε Δικαιώματα Χρήστη -- </option>
                    <?php
                    for ($i = 0; $i < sizeof($getUserTypes); $i++) {
                        echo "<option " . $sel . " value='" . $getUserTypes[$i]->utype_code . "'>";
                        echo $getUserTypes[$i]->user_rights;
                        echo "</option>";
                    }
                    ?>
                </select>
            </div> 

            <button style="float: right" type="submit" name="SearchUser" id="SearchUser" value="Αναζήτηση" class="btn btn-info "><span class="glyphicon glyphicon-search"></span> Αναζήτηση Χρήστη</button>
            <button style="float: left ; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'Index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>

        </form>
    </div>
    <?php
} else {

    echo "<h3>Χρήστες:</h3>";
    $DB = new Database();
    $DB->connect();
    $sql = "select user_types.user_rights, user_rank, user_type, user_title, user_first_name,user_last_name, "
            . " crew_of_pennant, user_reg_num, username "
            . "from users join user_types on users.user_type=user_types.utype_code";
    $w = " where user_reg_num != '0' AND ? ";

    $i = 0;
    $a = [];
    $a[$i++] = "1";


    if ($_POST['user_rank'] !== "") {
        $w = $w . " and user_rank like ? ";
        $a[$i++] = "%" . $_POST['user_rank'] . "%";
    }

    if ($_POST['user_title'] !== "") {
        $w = $w . " and user_title like ? ";
        $a[$i++] = "%" . $_POST['user_title'] . "%";
    }
    if ($_POST['user_first_name'] !== "") {
        $w = $w . " and user_first_name like ? ";
        $a[$i++] = "%" . $_POST['user_first_name'] . "%";
    }
    if ($_POST['user_last_name'] !== "") {
        $w = $w . " and user_last_name like ? ";
        $a[$i++] = "%" . $_POST['user_last_name'] . "%";
    }
  

    if ($_POST['crew_of_pennant'] !== "") {
        $w = $w . " and crew_of_pennant like ? ";
        $a[$i++] = "%" . $_POST['crew_of_pennant'] . "%";
    }

    if ($_POST['user_rights'] !== "") {
        $w = $w . " and user_types.utype_code like ? ";
        $a[$i++] = "%" . $_POST['user_rights'] . "%";
    }
    if ($_POST['user_reg_num'] !== "") {
        $w = $w . " and user_reg_num like ? ";
        $a[$i++] = $_POST['user_reg_num'] . "%";
    }
    if ($_POST['username'] !== "") {
        $w = $w . " and username like ? ";
        $a[$i++] = $_POST['username'] . "%";
    }
    ?>
    <div><table class="table table-bordered table-hover table-responsive" style="width: available;background-color: cyan">

            <thead>
                <tr style="background-color: darkcyan">

                    <th>Βαθμός</th>
                    <th>Επώνυμο</th>
                    <th>Όνομα</th>
                    <th>Αριθμός Μητρώου</th> 
                    <th>Μονάδα που ανήκει</th>
                    <th>Καθήκοντα στην Υπηρεσία</th>

                    <th>Δικαιώματα στην Εφαρμογή</th>
                    <th>Λειτουργίες</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $res = $DB->execute($sql . $w, $a);

                    //-------------Μέτρηση αποτελεσμάτων εγγραφών---------//

                    if ($res->rowCount() == 1) {

                        echo "<h4>Βρέθηκε " . $res->rowCount() . " εγγραφή με τα κριτήρια που δώσατε! </h4>";
                    } else if ($res->rowCount() == 0) {

                        echo "<h4>Δεν βρέθηκαν εγγραφές με τα κριτήρια που δώσατε! </h4>";
                    } else {
                        echo "<h4>Βρέθηκαν " . $res->rowCount() . " εγγραφές με τα κριτήρια που δώσατε! </h4>";
                    }

                    while ($row = $res->fetch()) {

                        $USearch = new Users();
                        $USearchType = new User_Types();
                        $USearchType->user_rights = $row['user_rights'];
                        $USearchType->utype_code = $row['user_type'];
                        $USearch->user_rank = $row['user_rank'];
                        $USearch->user_last_name = $row['user_last_name'];
                        $USearch->user_first_name = $row['user_first_name'];
                        $USearch->user_reg_num = $row['user_reg_num'];
                        $USearch->user_title = $row['user_title'];
                        $USearch->crew_of_pennant = $row['crew_of_pennant'];
                        $USearch->username = $row['username'];



                        echo "<td>" . $row['user_rank'] . "</td>";
                        echo "<td>" . $row['user_last_name'] . "</td>";
                        echo "<td>" . $row['user_first_name'] . "</td>";
                        echo "<td>" . $row['user_reg_num'] . "</td>";
                        echo "<td>" . $row['crew_of_pennant'] . "</td>";
                        echo "<td>" . $row['user_title'] . "</td>";
                        echo "<td>" . $row['user_rights'] . "</td>";
                        ?>

                        <td class="fit-content">
                            <form target="_blank" style ="float: left; padding: 2px;" method="post" action="Index.php?action=15">
                                <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                       type="text" name="SteliosEisaiTheos" value="<?php echo $row['user_reg_num']; ?>" readonly>
                                <button type="submit" title="πληροφορίες Χρήστη" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-eye-open"></i></button>
                            </form>

                            <form style ="float: left; padding: 2px;" method="post" action="Index.php?action=17">
                                <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                       type="text" name="SteliosEisaiTheosEdit" value="<?php echo $row['user_reg_num']; ?>" readonly>
                                <button type="submit" title="Επεξεργασία Χρήστη" class="btn btn-info btn-primary">
                                    <i class="glyphicon glyphicon-edit"></i></button>
                            </form>

                            <form style ="float: left; padding: 2px;" method="post" action="Index.php?action=16">
                                <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                       type="text" name="SteliosEisaiTheosDelete" value="<?php echo $row['user_reg_num']; ?>" readonly>
                                <button type="submit" title="Διαγραφή Χρήστη" class="btn btn-danger btn-primary">
                                    <i class="glyphicon glyphicon-trash"></i></button>
                            </form>

                            <form style ="float: left; padding: 2px;" method="post" action="Index.php?action=19">
                                <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                       type="text" name="AdminResetUserPass" value="<?php echo $row['user_reg_num']; ?>" readonly>
                                <button type="submit" title="Αλλαγή κωδικού Χρήστη" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-repeat"></i></button>
                            </form>
                            <?php
                            if ($row['user_type'] == '-1') {
                                ?>
                                <form style ="float: right; padding: 2px;" method="post" action="Index.php?action=16">
                                    <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                           type="text" name="SteliosEisaiTheosActivateUser" value="<?php echo $row['user_reg_num']; ?>" readonly>
                                    <button type="submit" title="Ανενεργός Χρήστης, Πατήστε για Ενεργοποίηση" class="btn btn-warning btn-primary">
                                        <i class="glyphicon glyphicon-ban-circle"></i></button>
                                </form> <?php
                            } else {
                                ?>
                                <form style ="float: right; padding: 2px;" method="post" action="Index.php?action=16">
                                    <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                           type="text" name="SteliosEisaiTheosDeactivateUser" value="<?php echo $row['user_reg_num']; ?>" readonly>
                                    <button type="submit" title="Ενεργός Χρήστης, Πατήστε για ΑΠΕΝΕΡΓΟΠΟΙΗΣΗ, Προσοχή ο χρήστης δεν θα μπορει να μπει!!" class="btn btn-success btn-primary">
                                        <i class="glyphicon glyphicon-ok-sign"></i></button>
                                </form> <?php
                            }
                            ?>
                        </td>

                        <?php
                        echo "</tr>";
                    }
                    ?>

                    <?php
                    echo "</tbody></table></div>";
                }