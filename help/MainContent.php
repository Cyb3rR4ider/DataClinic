<?php
if (!isset($a)) {
    $a = -1; // Default value if $a is not set
    echo "Action variable not set. Defaulting to -1.<br>";
}

switch ($a) {
    //-----------------------------Login-Logout------------------------//
    case 0:
        echo "Including Functions/Login.php<br>";
        include("Functions/Login.php");
        break;
    case 1:
        echo "Including Functions/Logout.php<br>";
        include("Functions/Logout.php");
        break;
    case 3:
        echo "Including Functions/Users/ViewAllUsers.php<br>";
        include("Functions/Users/ViewAllUsers.php");
        break;
    case 4:
        echo "Including Functions/Users/DeleteUser.php<br>";
        include("Functions/Users/DeleteUser.php");
        break;
    case 5:
        echo "Including Functions/Users/ViewUser.php<br>";
        include("Functions/Users/ViewUser.php");
        break;
    case 6:
        echo "Including Functions/Users/Resetpassword.php<br>";
        include("Functions/Users/Resetpassword.php");
        break;
    case 7:
        echo "Including Functions/Patient/ViewAllPatients.php<br>";
        include("Functions/Patient/ViewAllPatients.php");
        break;
    case 8:
        echo "Including Functions/Appointments/ViewAllAppoint.php<br>";
        include("Functions/Appointments/ViewAllAppoint.php");
        break;
    case 9:
        echo "Including Functions/Appointments/DeleteAppointment.php<br>";
        include("Functions/Appointments/DeleteAppointment.php");
        break;
    case 10:
        echo "Including Functions/Users/AddUser.php<br>";
        include("Functions/Users/AddUser.php");
        break;
    default:
        echo "Including Functions/Login.php by default<br>";
        include("Functions/Login.php");
        break;
}
?>
