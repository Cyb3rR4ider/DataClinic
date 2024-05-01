<?php
if (!isset($_POST['username'])) { 
    // Display the form if the submit button is not pressed.
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-2s ">
                <div class="text-center mb-5 col-md-1">
                    <img src="pic.png" class="rounded-circle" alt="User Photo" width="400" height="400">
                </div>
            </div>
            <div class="col-md-5 offset-md-1 mt-5">
              <h2 class="text-center mb-4">Login</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="PasswordInput">Password</label>
                        <input type="password" class="form-control" name="PasswordInput" id="PasswordInput" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
    

<?php 


} else { 
    // Process the form submission when the submit button is pressed.
    $neosXrhsths = new Users();
    $neosXrhsths->username = $_POST['username'];
    $neosXrhsths->login( $_POST['PasswordInput']);
    if ($neosXrhsths->us_role_id != NULL) {
        $_SESSION['username'] = $neosXrhsths->username;
        $_SESSION['rolosXrhsth'] = $neosXrhsths->us_role_id;
        header("Location: index.php");
    }
    
}//end of else