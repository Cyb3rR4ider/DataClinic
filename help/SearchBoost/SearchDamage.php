<?php
if (!isset($_POST['sent'])) {


    include ("Functions/Damages/search/searchdamageform.php");
} else {
    include ("Functions/Damages/search/searchdamageform.php");
    ?>

    <?php
    $DB = new Database();
    $DB->connect();
    $sql = "SELECT ship.PENNANT, ship.SHIP_NAME, damages.DAM_CODE,department_type.DEPRT_DESCRIPT,workgroups_type.wrkgrp_type_name,devices.DEV_CODE,
      devices.DEV_NAME,systems.SYS_CODE, systems.SYS_NAME, damages.DAM_DESCR,damages.DAM_DATE,damages.REPAIR_DATE
          FROM damages 
          join devices on damages.DEVICES_DEV_CODE=devices.DEV_CODE 
          join systems on devices.SYSTEMS_SYS_CODE=systems.SYS_CODE 
          join workgroups on systems.WORKGROUPS_WGROUP_CODE=workgroups.WGROUP_CODE 
          join workgroups_type ON workgroups.WGR_TYPE_CODE=workgroups_type.wrkgrp_type_code 
          join department on department.DEPARTMENT_CODE=workgroups.DEPARTMENT_DEPARTMENT_CODE 
          join department_type ON department.DEPARTMENT_TYPE_DEPRT_CODE=department_type.DEPRT_CODE 
          join ship on department.SHIP_PENNANT=ship.PENNANT
          join ship_type on ship.SHIP_TYPE_SHIPTYPE_CODE=ship_type.SHIPTYPE_CODE";
    $w = " where ? ";

    $i = 0;
    $a = [];
    $a[$i++] = "1";

    if ($_POST['shippennant'] !== "") {
        $w = $w . " and ship.PENNANT like ? ";
        $a[$i++] = "%" . $_POST['shippennant'] . "%";
    }

    if ($_POST['shipname'] !== "") {
        $w = $w . " and ship.SHIP_NAME like ? ";
        $a[$i++] = "%" . $_POST['shipname'] . "%";
    }
    if ($_POST['departmenttype'] !== "") {
        $w = $w . " and department_type.DEPRT_DESCRIPT like ? ";
        $a[$i++] = "%" . $_POST['departmenttype'] . "%";
    }
    if ($_POST['workgrouptype'] !== "") {
        $w = $w . " and workgroups_type.wrkgrp_type_name like ? ";
        $a[$i++] = "%" . $_POST['workgrouptype'] . "%";
    }
    if ($_POST['devicecode'] !== "") {
        $w = $w . " and devices.DEV_CODE like ? ";
        $a[$i++] = "%" . $_POST['devicecode'] . "%";
    }
    if ($_POST['devicename'] !== "") {
        $w = $w . " and devices.DEV_NAME like ? ";
        $a[$i++] = "%" . $_POST['devicename'] . "%";
    }
    if ($_POST['systemcode'] !== "") {
        $w = $w . " and systems.SYS_CODE like ? ";
        $a[$i++] = "%" . $_POST['systemcode'] . "%";
    }
    if ($_POST['systemname'] !== "") {
        $w = $w . " and systems.SYS_NAME like ? ";
        $a[$i++] = "%" . $_POST['systemname'] . "%";
    }
    if ($_POST['damagecode'] !== "0") {
        $w = $w . " and damages.DAM_CODE like ? ";
        $a[$i++] = $_POST['damagecode'] . "%";
    }
    if ($_POST['reldoc'] !== "") {
        $w = $w . " and damages.DAM_REL_DOCS like ? ";
        $a[$i++] = "%" . $_POST['reldoc'] . "%";
    }
    if ($_POST['damagedescr'] !== "") {
        $w = $w . " and damages.DAM_DESCR like ? ";
        $a[$i++] = "%" . $_POST['damagedescr'] . "%";
    }
    if ($_POST['damagedatefrom'] != "") {
        $w = $w . " and damages.DAM_DATE >= str_to_date(?,'%Y-%m-%d') ";
        $a[$i++] = $_POST['damagedatefrom'];
    } else {
        $w = $w . " and damages.DAM_DATE > str_to_date('1920-01-01','%Y-%m-%d') ";
    }
    if ($_POST['selopenorrepaired'] === "open") {
        $w = $w . " and damages.REPAIR_DATE IS NULL ";
    } 
    if ($_POST['selopenorrepaired'] === "repaired") {
        $w = $w . " and damages.REPAIR_DATE IS NOT NULL ";
    }
    
    if ($_POST['damagedateto'] != "") {
        $w = $w . " and damages.DAM_DATE <= str_to_date(?,'%Y-%m-%d') ";
        $a[$i++] = $_POST['damagedateto'];
    } else {
        $w = $w . " and damages.DAM_DATE < str_to_date('9999-12-31','%Y-%m-%d') ";
    }
    ?>




    <?php
    $res = $DB->execute($sql . $w, $a);

    //-------------Μέτρηση αποτελεσμάτων εγγραφών---------//
    ?> 
<script>
        $(function() {
            $('html, body').animate({
                scrollTop: $("#maindiv").offset().top
            }, 2000);
         });
    </script>
    
    <div class="panel panel-primary " id="maindiv">
        <div class="panel-heading" id="countrecords">
            <?php
            if ($res->rowCount() == 1) {

                echo "<h4>Βρέθηκε " . $res->rowCount() . " εγγραφή με τα κριτήρια που δώσατε! </h4>";
            } else if ($res->rowCount() == 0) {

                echo "<h4>Δεν βρέθηκαν εγγραφές με τα κριτήρια που δώσατε! </h4>";
            } else {
                echo "<h4>Βρέθηκαν " . $res->rowCount() . " εγγραφές με τα κριτήρια που δώσατε! </h4>";
            }
            ?>     
        </div>        
        <div style="background-color:   #9abde0 "class="panel-body">            

            <?php
            while ($row = $res->fetch()) {

                $D = new Damages();
                $S = new Ship();
                $DPT = new Department_Type();
                $WRKGRPT = new Workgroups_Type();
                $DEV = new Devices();
                $SYS = new Systems();
                $S->pennant = $row['PENNANT'];
                $S->ship_name = $row['SHIP_NAME'];
                $D->dam_code = $row['DAM_CODE'];
                $DPT->deprt_descript = $row['DEPRT_DESCRIPT'];
                $WRKGRPT->wrkgrp_type_name = $row['wrkgrp_type_name'];
                $DEV->dev_name = $row['DEV_NAME'];
                $SYS->sys_name = $row['SYS_NAME'];
                $D->dam_descr = $row['DAM_DESCR'];
                $D->dam_date = $row['DAM_DATE'];
                $D->repair_date = $row['REPAIR_DATE'];
                $D->getDb();



                if ($D->repair_date == NULL) {
                    
                } else {
                    
                }
                $date1 = new DateTime($D->dam_date);

                if ($D->repair_date == NULL) {
                    $date2 = new DateTime();
                } else {
                    $date2 = new DateTime($D->repair_date);
                }
                $diff = $date2->diff($date1)->format("%a");
                ?> 



                <div class="col-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">

                            Προβολή βλάβης με Kωδικό " <?php echo $D->dam_code; ?> " στο Πλοίο " <?php echo $S->ship_name; ?> "
                            <form  method="post" action="Index.php?action=4">
                                <input style=" display:none ;" type="text" name="shipViewButton" value="<?php echo $ViewDamShip->pennant; ?>" readonly>
        <!--                         <button type="submit" title="Προβολή Αναλυτικής Καταστασης Πλοίου <?php //echo $ViewDamShip->pennant;   ?>" class="btn btn-primary btn-info">
                               <i class="glyphicon glyphicon-arrow-left"> Επιστροφή σε <?php //echo $ViewDamShip->ship_name;   ?></i></button>-->
                            </form>                    



                        </div>
                        <div style="background-color:   #cccccc " class="panel-body">


                            <div class="col-lg-2">

                                <?php
                                if ($D->repair_date == NULL) {
                                    ?>


                                    <div class="panel panel-primary panel-danger">
                                        <div class="panel-heading">Βλάβη σε εξέλιξη</div>
                                        <div class="panel-body">
                                            <label>
                                                Από
                                            </label>
                                            <input class="form-control input" type="text" name="sys_name" value="<?php echo $D->dam_date; ?> " readonly>

                                            <label>
                                                Εδώ και :
                                            </label>
                                            <input class="form-control input" type="text" name="sys_name" value="<?php echo $diff; ?> ημέρες" readonly>
                                        </div>
                                    </div>  
                                    <?php
                                } else {
                                    ?>
                                    <div class="panel panel-primary panel-success">
                                        <div class="panel-heading"><label>Διάρκεια βλάβης:<br><?php echo $diff; ?> ημέρες</label>


                                        </div>
                                        <div class="panel-body">
                                            <label>
                                                Από
                                            </label>
                                            <input class="form-control input" type="text" name="sys_name" value="<?php echo $D->dam_date; ?> " readonly>

                                            <label>
                                                Εώς
                                            </label>
                                            <input class="form-control input" type="text" name="sys_name" value="<?php echo $D->repair_date; ?>" readonly>

                                        </div>
                                    </div>  

                                <?php } ?>

                            </div>
                            <div class="col-lg-4" style>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Σύστημα</div>
                                    <div class="panel-body">
                                        <label>Κωδικός</label>

                                        <input class="form-control input" type="text" name="dev_code" value="<?php echo $D->systems_sys_code; ?> " readonly>
                                        <label>Ονομασία</label>

                                        <input class="form-control input" type="text" name="deprt_descript" value="<?php echo $SYS->sys_name; ?> " readonly>


                                    </div>

                                </div>  

                            </div>
                            <div class="col-lg-4" style>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Συσκευή</div>
                                    <div class="panel-body">
                                        <label>Κωδικός</label>

                                        <input class="form-control input" type="text"  value="<?php echo $D->devices_dev_code; ?> " readonly>
                                        <label>Ονομασία</label>

                                        <input class="form-control input" type="text"  value="<?php echo $DEV->dev_name; ?> " readonly>


                                    </div>

                                </div>  

                            </div>

                            <div class="col-lg-2">
                                <div class="panel panel-primary ">
                                    <div class="panel-heading">Φώτογραφία Βλάβης</div>
                                    <div class="row">
                                        <div class="col-sm-12"  >

                                            <!-- Trigger the modal with a button -->
                                            <button type="button" class="btn btn-block" data-toggle="modal" data-target="#<?php echo $D->dam_code; ?>"><img class="img-thumbnail" src="Images/damages/<?php echo $D->dam_code; ?>_001.jpg" alt="no photo uploaded"></button>
                                            <div class="modal fade" id="<?php echo $viewDam->dam_code; ?>" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div style="width: 800px" class="modal-content">
                                                        <div  class="modal-header">
                                                            <button type="button" class="close" data-dismiss="#<?php echo $D->dam_code; ?>">&times;</button>
                                                            <h4 class="modal-title">Φωτογραφία Βλάβης με ΚΩΔIKO: <?php echo $D->dam_code; ?></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img class="img-thumbnail"  src="Images/damages/<?php echo $D->dam_code; ?>_001.jpg" alt="no photo uploaded">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default btn-info" data-dismiss="modal">Κλέισιμο</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- Modal for damage photo 1-->
                                        <div class="modal fade" id="<?php echo $D->dam_code; ?>" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div  class="modal-content">
                                                    <div  class="modal-header">
                                                        <button type="button" class="close" data-dismiss="<?php echo $D->dam_code; ?>">&times;</button>
                                                        <h4 class="modal-title">Φωτογραφία Βλάβης με ΚΩΔIKO: <?php echo $D->dam_code; ?></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img class="img-responsive "  src="Images/damages/<?php echo $D->dam_code; ?>_001.jpg" alt="no photo ">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-info" data-dismiss="modal">Κλέισιμο</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>      
                                <div class="panel panel-primary ">
                                    <div style="background-color:   #99ccff "class="panel-heading">



                                        <form target="_blank" method="post" action="Index.php?action=35">
                                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                                   type="text" name="ViewDamButton" value="<?php echo $row['DAM_CODE']; ?>" readonly>
                                            <button type="submit" title="Προβολή Βλάβης <?php echo $D->dam_code; ?>" class="btn btn-block btn-primary">
                                                <i class="glyphicon glyphicon-eye-open"></i> Προβολή</button>
                                        </form>

                                        <?php
                                        if (($_SESSION['user_type'] == 1) || ($_SESSION['user_type'] == 3) || ($_SESSION['user_type'] == 5) || ($_SESSION['user_type'] == 6)) {
                                            if ($row['REPAIR_DATE'] == NULL) {
                                                ?>
                                         <form target="_blank" method="post" action="Index.php?action=34">
                                                    <input style=" display:none" 
                                                           type="text" name="EditRepButton" value="<?php echo $row['DAM_CODE']; ?>" readonly>
                                                    <button type="submit" title="Πατήστε εδώ για να καταχωρήσετε εξελίξεις της βλάβης με κωδικό <?php echo $D->dam_code; ?>" class="btn btn-block" style=" background-color: darksalmon ">
                                                        <i class="fa fa-edit"></i> Εξελίξεις</button>
                                                </form>
                                                <form target="_blank" method="post" action="Index.php?action=36">
                                                    <input style=" display:none" 
                                                           type="text" name="DamageRepButton" value="<?php echo $row['DAM_CODE']; ?>" readonly>
                                                    <button type="submit" title="Πατήστε εδώ για να καταχωρήσετε επισκευή της βλάβης με κωδικό <?php echo $D->dam_code; ?>" class="btn btn-warning btn-block">
                                                        <i class="glyphicon glyphicon-wrench"></i> Επισκευή</button>
                                                </form>
                                                <?php
                                            } else {
                                                ?>
                                                <button type="submit" title="Η βλάβη με κωδικό <?php echo $D->dam_code; ?> έχει επισκευαστεί" disabled class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Επισκευασμένη</button>
                                                <?php
                                            }?>
                                             
                                                <?php
                                        }
                                        if (($_SESSION['user_type'] == 1) || ($_SESSION['user_type'] == 3) || ($_SESSION['user_type'] == 5)) {
                                            ?>

                                            <form target="_blank" method="post" action="Index.php?action=32">
                                                <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                                       type="text" name="DeleteDamButton" value="<?php echo $row['DAM_CODE']; ?>" readonly>
                                                <button title="Διαγραφή βλάβη με κωδικό <?php echo $D->dam_code; ?>" type="submit" class="btn btn-danger btn-block">
                                                    <i class="glyphicon glyphicon-trash"></i> Διαγραφή</button>
                                            </form>
                                        <?php } ?>    


                                    </div>
                                </div>

                                <!-- Modal for damage photo 1-->




                            </div>  
                        </div> 
                    </div>
                </div>




                <?php
            }
            ?>     </div>
    <?php }
    ?>
   