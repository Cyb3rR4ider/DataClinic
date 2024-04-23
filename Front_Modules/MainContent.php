<?php 
switch ($a) {
    //-----------------------------Login-Logout------------------------//
    case 0 : {
            include ("Functions/Login.php");
            break;
        }
    case 1 : {
            include ("Functions/Logout.php");
            break;
        }

        case 3 : {
            include ("Functions/Users/ViewAllUsers.php");
            break;
        }

        case 4 : {
            include ("Functions/Users/DeleteUser.php");
            break;
        }

        case 5 : {
            include ("Functions/Users/ViewUser.php");
            break;
        }

        case 6 : {
            include ("Functions/Users/Resetpassword.php");
            break;
        }

        case 7 : { 
            include ("Functions/Patient/ViewAllPatients.php");
            break;
        }
           
        case 40 : {
            include ("Functions/Appointments/ViewAllAppointments.php");
            break;
        }
    }
    