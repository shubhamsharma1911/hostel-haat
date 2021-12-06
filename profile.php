<?php
    session_start();
    include('connect.php');
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hostel-haat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="css/logo3-removebg-preview (1).png" rel="icon">
  <link href="css/logo3-removebg-preview (1).png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  <link rel="stylesheet"
href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
   #hideValuesOnSelect {
      display: none;
   }
</style>
</head>

<body>
<?php include("header.php") ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
  

  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="margin-top: 80px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
        <h1><?php echo "Welcome ".$_SESSION["user"]; ?> <a href="logout.php"><i class="bi-power"></i></a></h1>
          <p>Explore Hostel-haat features here</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              
              <h3>Read Blogs</h3>
              <p>Read most informative blogs by your hostel-mates. Enjoy the reading as learning new things is always good.</p>
              <a href="blog.php" class="read-more"><span>Explore More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              
              <h3>Write Blog</h3>
              <p>We all know sharing is caring, so share your knowledge with other hostelers through interesting blogs.</p>
              <a href="addpost.php" class="read-more"><span>Explore More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              
              <h3>Ask Doubt</h3>
              <p>Got stuck in anything, just ask here your doubt, and someone from you hostelmates will surely answer your query.</p>
              <a href="ask.php" class="read-more"><span>Explore More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              
              <h3>Q and A</h3>
              <p>We can learn from other persons problems also, so explore here others doubts and answer them if possible.</p>
              <a href="qanda.php" class="read-more"><span>Explore More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              
              <h3>Resources</h3>
              <p>checkout all different kind of resources shared by your fellow hostelmates, these are with room no for more information.</p>
              <a href="resources.php" class="read-more"><span>Explore More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              
              <h3>Add Resources</h3>
              <p>Share whatever resource you have with other hostelers it may be study related or any entertainment related.</p>
              <a href="addr.php" class="read-more"><span>Explore More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

  </main><!-- End #main -->
  <?php include('footer.php');?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="form.js"></script>
  
</body>
<script>
   function displayDivDemo(id, elementValue) {
      document.getElementById(id).style.display = elementValue.value == 1 ? 'block' : 'none';
   }
</script>
</html>