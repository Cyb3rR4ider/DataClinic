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
            include ("Functions/ViewAllUsers.php");
            break;
        }
    }
    