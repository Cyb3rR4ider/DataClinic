<?php
// Create a new Users object outside the if block
$allagipass = new Users();

if (!isset($_POST['newPassword'])) {
    // If the form for password change has not been submitted
    if (isset($_POST['passidres'])) {
        // Check if the user_id value has been passed
        $allagipass->user_id = $_POST['passidres'];
    } else {
        // If the user_id value has not been passed
        echo "User ID not provided.";
    }

    // Flag to track if the form has been displayed
    $formDisplayed = false;

    if (!$formDisplayed) {
        // Display the form for password reset
        echo "<h2 class='info'>Password reset for user: $allagipass->username</h2>";
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='passidres' value='$allagipass->user_id'>"; // Hidden field for user id
        echo "<label for='newPassword'>New password:</label>";
        echo "<input type='password' id='newPassword' name='newPassword' required><br>";
        echo "<label for='confirmPassword'>Confirm password:</label>";
        echo "<input type='password' id='confirmPassword' name='confirmPassword' required><br>";
        // Submit button
        echo "<button type='submit' name='resetPassword'>Reset Password</button>";
        echo "<button type='button' onclick='resetForm()'>Clear</button>"; // Button to clear the form
        echo "</form>";

        // Set the flag to true to indicate that the form has been displayed
        $formDisplayed = true;
    }

} else {
    // If the form for password change has been submitted
    $changedpass = new Users();
    $id = $_POST['passidres'];
    $pass = $_POST['newPassword'];
    $confirmPass = $_POST['confirmPassword'];
    if ($pass !== $confirmPass) { // If passwords do not match
        echo "<p class='error'>Passwords do not match. Please try again.</p>";
    } else {
        // If passwords match, execute the change
        $changedpass->user_id = $id;
        $changedpass->updatePasswordUser($pass);
        echo "<p class='success'>Password successfully changed.</p>";
    }
}

