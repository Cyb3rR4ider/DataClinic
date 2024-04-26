<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    // Create a new Users object
    $newUser = new Users();

    // Call the insertUser method to add the new user
    $success = $newUser->insertUser($username, $password, $email, $telephone,  $_POST['role']);

    // Check if user insertion was successful
    if ($success) {
        echo "User added successfully!";
    } else {
        echo "Failed to add user. Please try again.";
    }
}
?>

<div class="container mt-5">
    <h2>ΕΙΣΑΓΩΓΗ ΝΕΟΥ ΧΡΗΣΤΗ</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Όνομα Χρήστη:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Κωδικός Πρόσβασης:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="role">Ρόλος:</label>
            <select class="form-control" id="role" name="role" required>
                <option value="1">Κανονικός Χρήστης</option>
                <option value="2">Γιατρός</option>
                <option value="3">Υποδοχή</option>
                <option value="4">Διαχειριστής</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telephone">Τηλέφωνο:</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>
        <button type="submit" class="btn btn-primary">Υποβολή</button>
    </form>
</div>
