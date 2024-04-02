<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("Classes/Damages.php");
require_once("Classes/Database.php");
require_once("Classes/Ship.php");
require_once("Classes/Ship_Type.php");
require_once("Classes/Borrowing.php");
require_once("Classes/Department.php");
require_once("Classes/Department_Type.php");
require_once("Classes/Devices.php");
require_once("Classes/Parts.php");
require_once("Classes/Ship.php");
require_once("Classes/Ship_Type.php");
require_once("Classes/Supplier.php");
require_once("Classes/Systems.php");
require_once("Classes/User_Types.php");
require_once("Classes/Users.php");
require_once("Classes/Workgroups.php");
require_once("Classes/Workgroups_Type.php");
require_once("Classes/Systems_Reference.php");
require_once("Classes/Devices_References.php");
require_once("Classes/Systems_Allocation.php");


if (isset($_SESSION['user_type'])) {
    $user_type = $_SESSION['user_type'];
    $username = "";
} else {
    $user_type = -1;
    $username = "";
}
if (isset($_GET['action'])) {
    $a = $_GET['action'];
} else {
    $a = -1;
}
?>
<html>
    <head>

        <meta charset="UTF-8">
        <title>ManageBook v1.3.1</title>
        
        <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/w3css/w3.css">
        <link rel="stylesheet" href="css/w3css/csscolors.css">
        <script type="text/javascript" src="Js/Chart.js"></script>
        <!--
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="css/w3css/roboto.css">
        -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">


        
        <script type="text/javascript" src="Js/CheckLogin.js"></script>
        <script type="text/javascript" src="Js/formvalidate.js"></script>
        <script type="text/javascript" src="Js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="Js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Js/jquery-ui.js"></script>



    </head>
    <?php
    if (isset($_SESSION['username'])) {
        include("Includes/navbar/navbar.php");
    } else {
        include ("Includes/navbar/Login_navbar.php");
    }
    ?>
    <body class="container-fluid" style="
          padding: 0px;
          background:url('Images/Backgrounds/backkolazdark.jpg')no-repeat;
          background-size: cover;
          background-color: rgba(60,60,80,1);
          max-width: available;
          margin: 0px;
          margin-top: 10px;">
        <div class="container-fluid">

            <?php
            if (isset($_SESSION['username'])) {
                include("Includes/Body.php");
            } else {
                include ("Functions/Login.php");
            }
            ?>
        </div>
    </body>
</html>
