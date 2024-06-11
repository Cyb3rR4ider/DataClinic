<?php
session_start();
require_once("Classes/Database.php");
require_once("Classes/Users.php");
require_once("Classes/Patient.php");
require_once("Classes/Appointments.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doctor Application</title>
</head>

<body>

<?php
    if (isset($_GET['action'])) {
        $a = $_GET['action'];
    } else {
        $a = -1;
    }
    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        switch ($_SESSION['rolosXrhsth']) {
            case 4: // If admin
                include("Front_Modules/Navbars/AdminNavbar.php");
                break;
            case 1: // If simple user
                include("Front_Modules/Navbars/SimpleNavbar.php");
                break;
            case 2: // If doctor
                include("Front_Modules/Navbars/DoctorNavbar.php");
                break;
            case 3: // If Secretary
                include("Front_Modules/Navbars/SecretaryNavbar.php");
                break;
        }
    }

    // Include the main content
    include("Front_Modules/MainContent.php");

    // Include the design content if the user is logged in
    if (isset($_SESSION['username'])) {
        include('design_content.php');
    } else {
        // Display only the login form if the user is not logged in
        include("Front_Modules/Login.php");
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script> <!-- Link to your custom JavaScript file -->
    
</body>

</html>
