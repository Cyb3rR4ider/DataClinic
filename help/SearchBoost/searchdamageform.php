<div class="col-12">
    <div class="panel panel-primary panel-info">
        <div class="panel-heading">
            <div class="w3-row">
                <form method="post" action="">
                    <input type="hidden" value="1" name="sent">
                    <div class="col-xs-12 text-left"><h4>Αναζήτηση Βλαβών
                            <span><h5>Συμπληρώστε ένα ή περισσότερα πεδία!</h5></span></h4></div>


            </div>

        </div>
        <div class="panel-body">

            <div class="form-group">
                <label for="selopenorrepaired">Θέλετε να αναζητήσετε ανοιχτή ή επισκευασμένη βλάβη;</label>
                <select id="selopenorrepaired" name="selopenorrepaired" required class="form-control">
                    <option value="all"> Όλες </option>
                    <option value="open">Ανοιχτή </option>
                    <option value="repaired">Επισκευασμένη </option>
                </select>
            </div> 




        <div class="w3-row w3-margin-bottom">

            <div class=" w3-quarter  w3-border w3-theme-l2">
                <div class="w3-margin  w3-theme-l2">
                    <div class="w3-panel w3-card  w3-theme-d3 w3-theme-d5">Πλοίο</div>

                    <p><label>Πλευρικός Αριθμός Πλοίου</label>
                        <input class="w3-input w3-border w3-round w3-theme-l5" type="text" id="shippennant" name="shippennant"></p>

                    <p><label>Όνομα Πλοίου</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="shipname" name="shipname"></p>

                    <p><label>Διεύθυνση</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="departmenttype" name="departmenttype"></p>

                    <p><label>Επιστασία</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="workgrouptype" name="workgrouptype"></p>


                </div>
            </div>






            <div class=" w3-quarter  w3-border w3-theme-l2">
                <div class="w3-margin  w3-theme-l2">
                    <div class="w3-panel w3-card  w3-theme-d3 w3-theme-d5">Στοιχεία Βεβλαμένου Υλικού</div>

                    <p><label>Κωδικός Συσκευής</label>
                        <input class="w3-input w3-border w3-round w3-theme-l5" type="text" id="devicecode" name="devicecode"></p>

                    <p><label>Ονομασία Συσκευής</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="devicename" name="devicename"></p>

                    <p><label>Κωδικός Συστήματος</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="systemcode" name="systemcode"></p>

                    <p><label>Ονομασία Συστήματος</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="systemname" name="systemname"></p>


                </div>
            </div>

            <div class=" w3-quarter  w3-border w3-theme-l2">
                <div class="w3-margin  w3-theme-l2">
                    <div class="w3-panel w3-card  w3-theme-d3 w3-theme-d5">Ημερομηνία έναρξης βλάβης</div>

                    <p><label>Από</label>
                        <input class="w3-input w3-border w3-round w3-theme-l5" type="date" id="damagedatefrom" name="damagedatefrom"></p>

                    <p><label>Εώς</label>
                        <input class="w3-input w3-border w3-theme-l5" type="date" id="damagedateto" name="damagedateto"></p>



                </div>
            </div>

            <div class=" w3-quarter  w3-border w3-theme-l2">
                <div class="w3-margin  w3-theme-l2">
                    <div class="w3-panel w3-card  w3-theme-d3 w3-theme-d5">Σχετικά Βλάβης</div>

                    <p><label>Κωδικός Βλάβης</label>
                        <input class="w3-input w3-border w3-round w3-theme-l5" type="text" id="damagecode" name="damagecode"></p>

                    <p><label>Περιγραφή Βλάβης</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="damagedescr" name="damagedescr"></p>

                    <p><label>Σχετικό Σήμα</label>
                        <input class="w3-input w3-border w3-theme-l5" type="text" id="reldoc" name="reldoc"></p>



                </div>
            </div>
        </div>

            <input type="submit" class="btn-block btn btn-info" value="Αναζήτηση Βλάβης">
            <input type="button" name="cancel" value="Ακύρωση" class="btn btn-block btn-info " onclick="window.location = 'Index.php';" style="margin-top: 20px; color: lightsalmon; background-color: #009999" >


            </form>
        </div>
    </div>
</div>