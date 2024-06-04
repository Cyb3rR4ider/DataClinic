<?php 
if(!isset($_POST['username'])){
    $userToUpdate = new Users();
    $x= $userToUpdate->user_id = $_POST['passidupdate'];
    $userToUpdate->getUser($x);
?>

<h1>ΕΙΣΑΓΩΓΗ ΝΕΟΥ ΧΡΗΣΤΗ</h1>
<form action="" method="post">
<!-- User ID -->
<div data-mdb-input-init class="form-outline mb-4">
  <input type="text" name="userid" id="form7Example1" value="<?php echo $x ?>" class="form-control" readonly />
  <label class="form-label" for="form7Example1">UserID</label>
</div>
<!-- Name input -->
<div data-mdb-input-init class="form-outline mb-4">
  <input type="text" name="username" id="form7Example1" class="form-control" value="<?php echo $userToUpdate->username ?>" />
  <label class="form-label" for="form7Example1">'Ονομα Χρήστη</label>
</div>

<!-- Email input -->
<div data-mdb-input-init class="form-outline mb-4">
  <input type="email" name="email" id="form7Example1" class="form-control" value="<?php echo $userToUpdate->user_email ?>" />
  <label class="form-label" for="form7Example1">Email address</label>
</div>

<!-- User Tel -->
<div data-mdb-input-init class="form-outline mb-4">
  <input type="text" name="usertel" id="form7Example1" class="form-control" value="<?php echo $userToUpdate->user_tel ?>" />
  <label class="form-label" for="form7Example1">Τηλέφωνο Χρήστη</label>
</div>

<!-- Us Role ID -->
<div data-mdb-input-init class="form-outline mb-4">
  <!-- <input type="text" name="usroleid" id="form7Example" class="form-control" /> -->
  <label class="form-label" for="form7Example1">Ρόλος Χρήστη</label>
  <select name="sel_id" id="" value="<?php echo $userToUpdate->us_role_id ?>">
    <option selected="">Επιλέξτε Ρόλο</option>
    <option value="1">Χρήστης</option>
    <option value="2">Γιατρός</option>
    <option value="3">Ρεσεψιόν</option>
    <option value="4">Διαχειριστής</option>
  </select>
</div>

<button type="submit" class="btn btn-primary">Ενημέρωση Χρήστη</button>
<button type="submit" onclick="window.location = 'index.php';" value="Ακυρωση" class="btn btn-danger">Ακύρωση</button>

</form>
<?php } else {
    $usToUpdate = new Users();
    $usToUpdate->user_id = $_POST['userid'];
    $usToUpdate->username = $_POST['username'];
    $usToUpdate->user_email = $_POST['email'];
    $usToUpdate->user_tel = $_POST['usertel'];
    $usToUpdate->us_role_id = $_POST['sel_id'];
    $usToUpdate->updateUser();
    
    if (isset($_SESSION['status'])) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['status']; ?>
        <a href="index.php?action=3" class="alert-link">Συνέχεια</a>   
    </div>
    <?php
    
    }
    
  
  } ?>