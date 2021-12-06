<?php
    session_start();
    include('connect.php');
    //if(! isset($_SESSION['user']))
     //   header("Location: login.php");
     header( "refresh:14;url=index.php" );
?>
<?php include("header.php") ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog" style="margin-top: 80px;">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

            <h2 style="color:Green;">Thank You for being part of <span style="color: blue;"><b>Hostel-haat</b><span></h2>
            
                      <br>
      
                    <ul>
<b>
<li style="color: green;">Please Check your mailbox for registeration confirmation mail along with your team ID.</li>                    
<li style="color: green;">Read all the <a href="guidelines.php">guidelines</a> for the event carefully.</li></b>
          
                    

                    </ul>
                    

                    </ol>
            </article><!-- End blog entry -->

           
          </div><!-- End blog entries list -->
<!--
          <div class="col-lg-4">

            <div class="sidebar">
     
              
            </div> End sidebar -->

          </div><!-- End blog sidebar -->

        </div>
    </section>
   
  </main><!-- End #main -->
   <!-- ======= Footer ======= -->
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