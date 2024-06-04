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

        case 23: {
            include("Functions/Diagnosis/ViewAllDiagnosis.php");
            break;
        }
        
        case 24: {
            include("Functions/Treatment/ViewAllTreatments.php");
            break;
        }

        case 25: {
            include("Functions/MedicalRecord/MedicalRecord.php");
            break;
        }

        case 26: {
            include("Functions/FinancialTransactions/ViewAllFinancialTransaction.php");
            break;
        }

        case 27: {
            include("Functions/Roles/ViewAllRoles.php");
            break;
        }

        case 28 : {
            include("Functions/Diagnosis/AddDiagnosis.php");
            break;
        }
        case 29 : {
            include("Functions/Diagnosis/DeleteDiagnosis.php");
            break;
        }

        case 30 : {
            include("Functions/MedicalRecord/DeleteMedicalRecord.php");
            break;
        }
        case 31 : {
            include("Functions/MedicalRecord/AddMedicalRecord.php");
            break;
        }
        case 32 : {
            include("Functions/FinancialTransactions/DeleteFinancialTransaction.php");
            break;
        }

        case 33 : {
            include("Functions/FinancialTransactions/AddFinancialTransaction.php");
            break;
        }

        case 34: {
            include("Functions/Treatment/AddTreatment.php");
            break;
        }

        case 35: {
            include("Functions/Treatment/DeleteTreatment.php");
            break;
        }

        case 36 : {
            include("Functions/Appointments/SearchAppointment.php");
            break;
        }

        case 37 : {
            include("Functions/Diagnosis/SearchDiagnosis.php");
            break;
        }

        case 38 : {
            include("Functions/FinancialTransactions/SeachFinancialTransactions.php");
            break;
        }

        case 39 : {
            include("Functions/MedicalRecord/SearchMedicalRecord.php");
            break;
        }

        case 40 : {
            include("Functions/Patient/SearchPatient.php");
            break;
        }

        case 41 : {
            include("Functions/Treatment/SearchTreatment.php");
            break;
        }

        case 50 : {
            include("about.php");
            break;
        }



    }
    