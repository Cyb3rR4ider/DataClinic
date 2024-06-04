<?php
require_once("../Classes/Database.php");
require_once("../Classes/Users.php");

if (!isset($_POST['email'])) {
    include('src/ForgotPassword.php');
} else {
    date_default_timezone_set('Europe/Athens');
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(16)); // Creating the Token
    $token_hash = hash("sha256", $token); // Hashing the token

    $expiry = date("Y-m-d H:i:s", time() + 60 * 30); // Create a time so the token can be available only for 30 minutes

    $new_user = new Users();
    $new_user->updateResetToken($token_hash, $expiry, $email);

    require("Mailer.php");
    $mail = getPHPMailer();

    $mail->setFrom('nonreply069@gmail.com');
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost/Draapp_Git/DataClinic/resetPass.php?token=$token">here</a>
    to reset your password

    END;

    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
}

//echo "Message sent, please check your email!";
echo '<script type="text/javascript">';
echo 'alert("Message sent, please check your email!");';
echo 'window.location.href = "../index.php";';
echo '</script>';