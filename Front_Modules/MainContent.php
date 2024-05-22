<?php 

switch ($a) {
    
    
    //-----------------------------Login-Logout------------------------//
    case 0 : {
            
            include ("Front_Modules/Login.php");
            
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
            
            include ("Functions/Users/SearchUser.php");
            
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
        case 8 : {
            
            include ("Functions/Appointments/ViewAllAppoint.php");
            break;
        }
        case 9 : { 
            
            include ("Functions/Appointments/DeleteAppointment.php");
            break;
        }  
        case 10 : {
            
            include ("Functions/Users/AddUser.php");
            break;
        }
        case 11 : {
            
            include ("Functions/Users/UpdateUser.php");
            break;
        }
        case 12 : {
            
            include ("Functions/Users/SearchedResults.php");
            break;
        }

        case 13 : {
            include("Functions/Patient/PatientCard.php");
            break;
        }

        case 14 : {
            include("Functions/Patient/Contact.php");
            break;

        }

        case 21 : {
            include("Functions/Appointments/AddAppointment.php");
            break;
        }

        case 22: {
            include("Functions/Patient/AddPatient.php");
            break;
        }
       

    }
    