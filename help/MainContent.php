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
        
        
    //-------------------------BETA BETA BETA--------------------//    
        
        case 37 : {
            include ("BETAfunctions/BETAsearchDamages.php");
            break;
        }
        
        case 38 : {
            include ("BETAfunctions/BETAviewDamage.php");
            break;
        }
        
        case 39 : {
            include ("BETAfunctions/BETAinsertDamage.php");
            break;
        }
        
        
         case 165: {
            include ("BETAfunctions/BETAMonthlyYearlyGraph.php");
            break;
        }
        
    //-----------------------------CSS------------------------//
        
    case 999 : {
            include ("BETAfunctions/w3css.php");
            break;
        }    

    //-----------------------------Ships------------------------//

    case 3 : {
            include ("Functions/Ships/ViewAllShips.php");
            break;
        }
    case 4 : {
            include ("Functions/Ships/ViewShip.php");
            break;
        }
    case 5 : {
            include ("Functions/Ships/EditShip.php");
            break;
        }
    case 6 : {
            include ("Functions/Ships/SearchShip.php");
            break;
        }
    case 7 : {
            include ("Functions/Ships/DeleteShip.php");
            break;
        }
    case 8 : {
            include ("Functions/Ships/InsertShip.php");
            break;
        }

    case 9 : {
            include ("Functions/Ships/ChangeShipStatus.php");
            break;
        }

    //-----------------------------Users------------------------//

    case 10 : {
            include ("Functions/Users/ViewAllUsers.php");
            break;
        }

    case 13 : {
            include ("Functions/Users/AddUser.php");
            break;
        }
    case 14 : {
            include ("Functions/Users/SearchUser.php");
            break;
        }
    case 15 : {
            include ("Functions/Users/ViewUser.php");
            break;
        }
    case 16 : {
            include ("Functions/Users/DeleteUser.php");
            break;
        }
    case 17 : {
            include ("Functions/Users/EditUser.php");
            break;
        }
    case 18 : {
            include ("Functions/Users/ChangePassword.php");
            break;
        }
    case 19 : {
            include ("Functions/Users/AdminChangeUserPassword.php");
            break;
        }

    //-----------------------------Borrowings------------------------//

    case 20 : {
            include ("Functions/Borrowings/ViewAllBorrowings.php");
            break;
        }
    case 21 : {
            include ("Functions/Borrowings/SearchBorrowing.php");
            break;
        }
    case 22 : {
            include ("Functions/Borrowings/DeleteBorrowing.php");
            break;
        }
    case 23 : {
            include ("Functions/Borrowings/ViewBorrowing.php");
            break;
        }
    case 24 : {
            include ("Functions/Borrowings/InsertBorrowing.php");
            break;
        }
    case 25 : {
            include ("Functions/Borrowings/EditBorrowing.php");
            break;
        }
    case 26 : {
            include ("Functions/Borrowings/ReturnBorrowing.php");
            break;
        }

    //-----------------------------Damages------------------------//

    case 30 : {
            include ("Functions/Damages/ViewAllDamages.php");
            break;
        }
    case 31 : {
            include ("Functions/Damages/SearchDamage.php");
            break;
        }
    case 32 : {
            include ("Functions/Damages/DeleteDamage.php");
            break;
        }
    case 33 : {
            include ("Functions/Damages/InsertDamage.php");
            break;
        }
    case 34 : {
            include ("Functions/Damages/EditDamage.php");
            break;
        }
    case 35 : {
            include ("Functions/Damages/ViewDamage.php");
            break;
        }
    case 36 : {
            include ("Functions/Damages/RepairDamage.php");
            break;
        }
        
    
        

    //-----------------------------Devices------------------------//

    case 40 : {
            include ("Functions/Devices/ViewAllDevices.php");
            break;
        }
    case 41 : {
            include ("Functions/Devices/ViewDevice.php");
            break;
        }
    case 42 : {
            include ("Functions/Devices/DeleteDevice.php");
            break;
        }
    case 43 : {
            include ("Functions/Devices/EditDevice.php");
            break;
        }
    case 44 : {
            include ("Functions/Devices/SearchDevice.php");
            break;
        }
    case 45 : {
            include ("Functions/Devices/InsertDevice.php");
            break;
        }
    //-----------------------------Systems------------------------//

    case 50 : {
            include ("Functions/Systems/ViewAllSystems.php");
            break;
        }
    case 51 : {
            include ("Functions/Systems/ViewSystem.php");
            break;
        }
    case 52 : {
            include ("Functions/Systems/DeleteSystem.php");
            break;
        }
    case 53 : {
            include ("Functions/Systems/EditSystem.php");
            break;
        }
    case 54 : {
            include ("Functions/Systems/InsertSystem.php");
            break;
        }
    case 55 : {
            include ("Functions/Systems/SearchSystem.php");
            break;
        }

    //-----------------------------Parts------------------------//

    case 60 : {
            include ("Functions/Parts/ViewAllParts.php");
            break;
        }
    case 61 : {
            include ("Functions/Parts/ViewPart.php");
            break;
        }
    case 62 : {
            include ("Functions/Parts/DeletePart.php");
            break;
        }
    case 63 : {
            include ("Functions/Parts/EditPart.php");
            break;
        }
    case 64 : {
            include ("Functions/Parts/InsertPart.php");
            break;
        }
    case 65 : {
            include ("Functions/Parts/SearchPart.php");
            break;
        }


    //-----------------------------Suppliers------------------------//

    case 70 : {
            include ("Functions/Suppliers/ViewAllSuppliers.php");
            break;
        }
    case 71 : {
            include ("Functions/Suppliers/InsertSupplier.php");
            break;
        }
    case 72 : {
            include ("Functions/Suppliers/DeleteSupplier.php");
            break;
        }
    case 73 : {
            include ("Functions/Suppliers/EditSupplier.php");
            break;
        }
    case 74 : {
            include ("Functions/Suppliers/SearchSupplier.php");
            break;
        }
    case 75 : {
            include ("Functions/Suppliers/ViewSupplier.php");
            break;
        }
    //-----------------------------E-Διευθυντής------------------------//
    case 80 : {
            include ("Functions/eDirector/DepartmentBorrowings.php");
            break;
        }
    case 81 : {
            include ("Functions/eDirector/DepartmentDamages.php");
            break;
        }
    case 82 : {
            include ("Functions/eDirector/DepartmentDevices.php");
            break;
        }
    case 83 : {
            include ("Functions/eDirector/ViewDepartmentSystems.php");
            break;
        }
    case 84 : {
            include ("Functions/eDirector/ViewDepartment.php");
            break;
        }

    //-----------------------------E-Υπόλογος------------------------//
    case 90 : {
            include ("Functions/eDirector/ViewWorkgroup.php");
            break;
        }
    case 91 : {
            include ("Functions/eDirector/ViewWorkgroupSystems.php");
            break;
        }
    case 92 : {
            include ("Functions/eDirector/WorkgroupBorrowings.php");
            break;
        }
    case 93 : {
            include ("Functions/eDirector/WorkgroupDamages.php");
            break;
        }
    case 94 : {
            include ("Functions/eDirector/WorkgroupDevices.php");
            break;
        }

    //-----------------------------Departments------------------------//
    case 110 : {
            include ("Functions/Departments/ViewAllDepartments.php");
            break;
        }
    case 111 : {
            include ("Functions/Departments/ViewDepartment.php");
            break;
        }
    case 112 : {
            include ("Functions/Departments/InsertDepartment.php");
            break;
        }
    case 113 : {
            include ("Functions/Departments/EditDepartment.php");
            break;
        }
    case 114 : {
            include ("Functions/Departments/DeleteDepartment.php");
            break;
        }


    //-----------------------------Workgroups------------------------//

    case 120 : {
            include ("Functions/Workgroups/ViewAllWorkgroups.php");
            break;
        }
    case 121 : {
            include ("Functions/Workgroups/ViewWorkgroup.php");
            break;
        }
    case 122 : {
            include ("Functions/Workgroups/InsertWorkgroup.php");
            break;
        }
    case 123 : {
            include ("Functions/Workgroups/EditWorkgroup.php");
            break;
        }
    case 124 : {
            include ("Functions/Workgroups/DeleteWorkgroup.php");
            break;
        }



    //-----------------------------References------------------------//

    case 130 : {
            include ("Functions/References/ViewAllReferenceSystems.php");
            break;
        }
    case 131 : {
            include ("Functions/References/InsertReferenceSystem.php");
            break;
        }
    case 132 : {
            include ("Functions/References/ViewAllReferenceDevices.php");
            break;
        }
    case 133 : {
            include ("Functions/References/InsertReferenceDevice.php");
            break;
        }


    //-----------------------------Statistics------------------------//

    case 140 : {
            include ("Functions/Statistics/SearchSystemForStats.php");
            break;
        }
    case 141 : {
            include ("Functions/Statistics/SearchDeviceForStats.php");
            break;
        }

    case 142 : {
            include ("Functions/Statistics/SystemTotalDamages.php");
            break;
        }

    case 143 : {
            include ("Functions/Statistics/CalendaryStats.php");
            break;
        }
    case 151 : {
            include ("Functions/Statistics/Graphs/SystemMonthlyDamages.php");
            break;
        }
    case 152: {
            include ("Functions/Statistics/SystemQuarterYearDamages.php");
            break;
        }
    case 153: {
            include ("Functions/Statistics/DeviceTotalDamages.php");
            break;
        }
    case 154: {
            include ("Functions/Statistics/DeviceTotalDamages.php");
            break;
        }
    case 155 : {
            include ("Functions/Statistics/Graphs/DeviceMonthlyDamages.php");
            break;
        }
    case 156: {
            include ("Functions/Statistics/DeviceQuarterYearDamages.php");
            break;
        }
    case 157: {
            include ("Functions/Statistics/SystemMTBF.php");
            break;
        }

    case 158: {
            include ("Functions/Statistics/ExportToExcel.php");
            break;
        }
        
    case 160: {
            include ("Functions/Statistics/DeviceMTBF.php");
            break;
        }

   



    //-----------------------------Others------------------------//
    case 100 : {
            include ("Functions/AboutTheApp.php");
            break;
        }

    case 101 : {
            include ("Images/uploadphoto.php");
            break;
        }

    case 102 : {
            include ("Images/uploadVideo.php");
            break;
        }
        
    case 103 : {
            include ("Images/uploadphoto_original.php");
            break;
        }
    
    case 104 : {
            include ("Images/uploadvideo_original.php");
            break;
        }
    
    case 106 : {
            include ("Images/resizeforthumb.php");
            break;
        }
        

        
        
   
        
    default : {
            include ("Functions/Home.php");
            break;
        }
}
?>