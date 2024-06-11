<!-- design_content.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATACLINIC</title>
    <meta name="title" content="DataClinic">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom css --> 
    <link rel="stylesheet" href="assets/styles.css"> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
</head>
<body>


    
<!--ionicon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Preloader --> 

<div class="preloader" data-preloader>
    <div class="circle"></div>
</div>

<!--Header in adminnavbarr and style.css cause i could only log in as an admin
--> 



<!--Main content --> 



   <!-- Main content -->
   <section class="section hero" aria-label="home" id="Main" <?php echo in_array($_SERVER['REQUEST_URI'], ['/Functions\Appointments\DeleteAppointment.php', '/Functions\Appointments\ViewAllAppoint.php', '/Functions\Patient\ViewAllPatients.php', '/Functions\Users\AddUser.php', '/Functions\Users\DeleteUser.php', '/Functions\Users\Resetpassword.php' , 'Functions\Users\SearchUser.php', '/Functions\Users\ViewAllUsers.php', '/Functions\Users\ViewUser.php']) ? 'style="display:none;"' : ''; ?>>
   <div class="container">
        <div class="hero-content">
            <h1 class="headline-lg hero-title">
                Welcome To<br>
                DataClinic
            </h1>
            <button class="btn learn-more" onclick="scrollToDescription()">Learn More</button>
        </div>

        <div class="hero-banner" id="background-image-container">
            <img src="./assets/images/smallerbgpic.png" alt="hero banner" class="small-image">
        </div>
    </div>
</section>

<!-- Description section -->
<section class="section description" id="Description">
    <div class="container">
        <div class="description-content">
            <div class="description-text">
                <h2>Description Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.<br>
              I am suffering, why wont you scroll... whyyyyyyyyyyy</p>
                
            </div>
            <div class="description-image">
                <img src="./assets/images/Descr.png" alt="Description Image">
            </div>
        </div>
    </div>
</section>

   <!-- Footer -->
   <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <span class="text-muted">© 2024 DataClinic. All rights reserved.</span>
        </div>
    </footer>

      



<!-- Bootstrap and other scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="assets/js/scripts.js"></script> <!-- Link to your custom JavaScript file -->
<!-- JavaScript -->



</body>
</html>



