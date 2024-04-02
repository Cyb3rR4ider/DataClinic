<?php
if (!isset($_POST['username'])) { //όσο δεν έχει πατήσει submit ο χρήστης εμφάνισε τη φόρμα.
?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">

        </div>
        <div class="form-group">
            <label for="PasswordInput">Password</label>
            <input type="password" class="form-control" name="PasswordInput" id="PasswordInput" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
<?php } else { //Μόλις πατηθεί το submit και πάρει τιμή το $_POST['username']
    $neosXrhsths = new Users();
    $neosXrhsths->username = $_POST['username'];
    $neosXrhsths->password = $_POST['PasswordInput'];
    $neosXrhsths->login();
    if ($neosXrhsths->us_role_id != NULL) {
        $_SESSION['username']= $neosXrhsths->username;
        header("Location: index.php");
    }
    
}//end of else