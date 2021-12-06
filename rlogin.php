<?php
    session_start();

    if( isset($_SESSION['user'])){
        header("Location: profile.php");
    }

    if( isset( $_POST["submit"] ) )
    {   

        function valid($data){
            $data=trim(stripslashes(htmlspecialchars($data)));
            return $data;
        }

        $inuser = valid( $_POST["username"] );
        $inkey = valid( $_POST["password"] );

        include("connect.php");

        $query = "SELECT name, email, phno, rollno, institute, password FROM student WHERE rollno='$inuser'";

        $result = mysqli_query( $conn, $query);
        if(mysqli_error($conn)){
            echo "<script>window.alert('Something Goes Wrong. Try Again');</script>";
        }
        else if( mysqli_num_rows($result) > 0 ){
            while( $row = mysqli_fetch_assoc($result) ){
                $user = $row['name'];
                $pass = $row['password'];
                $name = $row['rollno'];
                $email = $row['email'];
                $date = $row['institute'];
            }

            if(  $inkey==$pass  ){
                $_SESSION['user'] = $user;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['date'] = $date;
                header('Location: index.php');
            }
            else{
                echo "<script>window.alert('Wrong Username or Password Combination. Try Again');</script>";
            }
        }
        else{
            echo "<script>window.alert('No Such User exist in database');</script>";
        }
        mysqli_close($conn);
    }
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

</head>

<body>
<!-- ======= Header ======= -->
<?php include("header.php") ?>
  
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
  
        <p>Login</p>
      </header>

      <div class="row gy-4" >
      <div class="col-lg-6">

<div class="row gy-4">
  <img src="images/login.png" alt="">
</div>

</div>
<div class="col-lg-6">
       <p style="color: green;">Registration successfull, you can login now!! </p>
                <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data" class="loginform">
                <div class="row gy-4" >
                    <input name="username" id="user" type="text" title="Username" placeholder="Roll Number" class="form-control" required>
                    <input name="password" id="key" type="password" title="Password" placeholder="Password"  class="form-control" required>
                  
                    <div class="col-md-12 text-center">
                    
                           <input name="submit" type="submit" value="Log In" class="up-in">
                            <input type="button" value="Create a new account" class="up-in" id="tosign">
                        
                    </div>
                    <a href="contact.php" id="trouble"><span>Having Trouble in login ? Contact Us</span></a>
                </div>
                </form>
        
</div>         </div>
    </div>  
    </div>    
  </section>
  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
      <!-- Sripts -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>
</body>

</html>