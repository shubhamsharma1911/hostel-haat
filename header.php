<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hostel-haat</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/letter-249064_640-removebg-preview.png" rel="icon">
  <link href="css/logo3-removebg-preview (1).png" rel="apple-touch-icon">
    

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
<style>

.bg-image{

  background-image: url('assets/img/hero-bg.png'); 


background-position: center;
background-repeat: no-repeat;
background-size: contain;
}


</style>
</head>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/letter-249064_640-removebg-preview.png" alt="">
        <span>Hostel-haat</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto " href="resources.php">Resources</a></li>
        <li><a class="nav-link scrollto" href="cultural.php">Hostel Night</a></li>
        <li><a class="nav-link scrollto" href="qanda.php">Q and A</a></li>
        <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
        <li><a class="nav-link scrollto" href="team.php">Our Team</a></li>
        <li><a class="nav-link scrollto" href="contact.php">Contact us</a></li>
        <?php 
                if(! isset($_SESSION['user'])){
            ?>
          
            <li><a href="login.php" class="getstarted scrollto active">Start Now! </a> </li>
            <?php
                }
                else{
            ?>
             
            <li class="dropdown "><a href="profile.php" class="getstarted scrollto "><span>Hi,<?php echo $_SESSION["user"]; ?></span> <i class="bi bi-chevron-down"></i></a>
            
          </li>
        
            <?php
                }
            ?>
      
    
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->