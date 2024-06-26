<?php
ob_start();
session_start();
require_once("Classes/Database.php");
require_once("Classes/Users.php");
require_once("Classes/Patient.php");
require_once("Classes/Appointments.php");
require_once("Classes/Diagnosis.php");
require_once("Classes/Treatment.php");
require_once("Classes/Medical_Record.php");
require_once("Classes/Financial_Transactions.php");
require_once("Classes/Roles.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js"></script>
    <title>Doctor Application</title>
</head>

<body>
    <?php
    if (isset($_GET['action'])) {
        $a = $_GET['action'];
    } else {
        $a = -1;
    }
    if (isset($_SESSION['username']) && isset($_SESSION['rolosXrhsth'])){ //Αν ο χρήστης είναι logged in
        if (($_SESSION['rolosXrhsth']) == 4) { //αν ειναι admin
            include("Front_Modules/Navbars/AdminNavbar.php");
        
        }
        if (($_SESSION['rolosXrhsth']) == 1) { //αν ειναι simple user
            include("Front_Modules/Navbars/SimpleNavbar.php");
        }
        if (($_SESSION['rolosXrhsth']) == 2) { //αν ειναι doctor
            include("Front_Modules/Navbars/DoctorNavbar.php");
        }
        if (($_SESSION['rolosXrhsth']) == 3) { //αν ειναι Secretary
            include("Front_Modules/Navbars/SecretaryNavbar.php");
        }
    
    }
    elseif($a == 120) {
       include("Front_Modules/ForgotPass.php");
    }
    elseif($a == 200){
        include("Front_Modules/Register.php");
    }
    elseif($a == 202){
        include("Front_Modules/ChangePass.php");
    }
    

    else {
        include("Front_Modules/Login.php");
    }
    //print_r($_SESSION);
    $user = new Users();
    //$user->passwordHash();
    include("Front_Modules/MainContent.php");
    
    include("./Functions/Users/javascript.js")
    ?>
</body>

</html>