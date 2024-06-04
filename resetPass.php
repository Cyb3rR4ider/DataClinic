<?php

require_once("Classes/Database.php");
require_once("Classes/Users.php");

date_default_timezone_set('Europe/Athens');

$token = $_GET["token"];
$token_hash = hash("sha256", $token);
$new_user = new Users();
$user = $new_user->getUserFromToken($token_hash);

if ($user == null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

if (!isset($_POST['password'])) {
    include("Front_Modules/ChangePass.php");
} else {
    if ($_POST['password'] == $_POST['repeat-password']) {
        $new_user->user_id = $user["user_id"];
        $new_user->updatePasswordUser($_POST['password']);
        $expiry = date("Y-m-d H:i:s", time());
        $new_user->removeTokenDate($token_hash, $expiry);
        echo '<script type="text/javascript">';
        echo 'alert("Επιτυχής Αλλαγή Κωδικού Πρόσβασης!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }else {
        echo '<script type="text/javascript">';
        echo 'window.location.reload()';
        echo 'alert("Oι κωδικοί δεν ταιριάζουν!");';
        echo '</script>';
        //header("http://localhost/Draapp_Git/DataClinic/resetPass.php?token=$token");

    }
}
