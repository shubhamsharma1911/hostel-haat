
<?php 
 session_start();
if(! isset($_SESSION['user']))
header("Location: login.php");
require_once "dbpdo.php";
require_once "dbconnect.php";
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';






if ( isset($_POST['question']) 
      
     ) {
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $sql2="SELECT id FROM quans ";
    
    if ($result=mysqli_query($conn,$sql2))
      {
      // Return the number of rows in result set
      global $rowcount;
      $rowcount=mysqli_num_rows($result);
      printf("Result set has %d rows.\n",$rowcount);
      // Free result set
    
      }

$cat="Algorithms";

$fid=$rowcount+8;

    
    try {
        $sql = "INSERT INTO quans (question , askedby ) VALUES ( :question, :askedby)";
   
$stmt = $pdo->prepare($sql);

$stmt->execute(array(
  

  ':question' => $_POST['question'], 

 
  ':askedby' => $_SESSION['user'], 

  
));
$sql1 = "INSERT INTO quacat (category, id ) VALUES ( :category, :id)";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute(array(
  

  ':category' => $cat, 

 
  ':id' => $fid,

  
)); 
    }
    catch(Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }
  

   





    /*
    if(!empty($l_email)) {

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'aavahan.ptu@gmail.com'; // Gmail address which you want to use as SMTP server
      $mail->Password = 'TechFest@Ptu.2021'; // Gmail address Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';
    
      $mail->setFrom('aavahan.ptu@gmail.com'); // Gmail address which you used as SMTP server
    
      $mail->addAddress($l_email); 
      
      $mail->isHTML(true);
      $mail->Subject = 'Welcome to Aavahan 21 family';
      $mail->Body = "

      <h2>Congratulations! $l_name<h2>
      <h3>You have successfully registered for Aavahan 2021<h3>
     <h3>Your Team Registration ID is $teamid. Keep this ID with you for future reference.</h3>
     <h3>Your details are:<h3>
     <table >
        <tr><th>Name</th><th>Email</th><th>Roll No</th></tr>
        <tr><td>$l_name</td><td>$l_email</td><td>$l_rollno</td></tr>
   
      </table>
    <p>If you have any event-specific doubts, then please contact the event managers whose contact details are available on that competition's page. 
    If your queries are not addressed, feel free to contact our Head, Events </p>
    <p>(*prefer WhatsApp)</p>
    <p>Mr. Rachit Kumar (+91-8699612002)</p>
    <p>Mr. Shubham Sharma (+91-9079358093)</p>
    <p>Mr. Nitish Kumar (+91-7545053841)</p>
    <p>Thank You</p>
    <p>Team Aavahan 2021</p>

      ";
    
      $mail->send();
    } */

  header( 'Location: qanda.php' ) ;
   return;
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
 
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            textarea{
                display: none;
                width: 300px;
                height: 50px;
                background: #333;
                color: #ddd;
                padding: 10px;
                margin: 5px 0 -14px; 
            }
            .ans_sub{
                display: none;
                padding: 0 10px;
                height: 30px;
                line-height: 30px;
            }
            .pop{
                display: none;
                text-align: center;
                margin: 195.5px auto;
                font-size: 12px;
            }
        </style>
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
<!-- ======= Header ======= -->
<?php include("header.php") ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog " style="margin-top: 80px;">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

            <div id="example3">      
<form method="post" class="p-3" id="form3" enctype="multipart/form-data">
<div class="form-group">
<h1 style="text-align: center;color:blue">Ask your doubts here</h1>

</br>


 <!-- 

<p>Category:
<input type="text" name="category" size="40" class="form-control"></p> 
<div class="form-group"> -->
<p>Your Question:
<input type="text" name="question" class="form-control" required></p>
 </p>  


         

<p><input type="submit" name="submit" value="Submit" onclick="myFunction()" class="btn btn-primary"/></p>
<p style="color: red;display:none" id="myDIVv"><b>[ after Clicking submit, Please wait for confirmation message :) ]</b></p>
</div>

</form> 







</div>  
<div id="for_replacement" style="display:none;">
<p>
<b>This replaces the form when the button is clicked.</b>
<br>(This visual example does not submit. A real form would.)
</div>

              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


            </article><!-- End blog entry -->

           
          </div><!-- End blog entries list -->

 
          <div class="col-lg-4">

<div class="sidebar">

 

  <h3 class="sidebar-title">Quick Link</h3>
  <div class="sidebar-item categories">
    <ul>
      <li><a href="addpost.php">Add Post </a></li>
      <li><a href="blog.php">Blogs </a></li>
      <li><a href="resources.php">Resources </a></li>
      <li><a href="addr.php">Add Resources </a></li>
      <li><a href="cultural.php">Hostel Night </a></li>
      <li><a href="qanda.php">Questions And Answers </a></li>
    </ul>
  </div><!-- End sidebar categories-->

  
  <h3 class="sidebar-title">Our Top Writers</h3>
  <div class="sidebar-item categories">
    <ul>
      <li><a href="#">Shubham Sharma </a></li>
      <li><a href="#">Prem Kumar</a></li>
      <li><a href="#">Shubham Kumar </a></li>
      <li><a href="#">Nitish  Kumar </a></li>
      <li><a href="#">Rajat Singh</a></li>
      <li><a href="#">Vaibhav Rana</a></li>
    </ul>
  </div><!-- End sidebar categories-->

  

</div><!-- End sidebar -->

</div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
   
  </main><!-- End #main -->
 <?php include("footer.php") ?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="form3.js"></script>
  <script src="form1.js"></script>
  
</body>


<script type="text/javascript">
function ReplaceForm()
{
// Three places to customize:

// Specify the id of the form.
var IDofForm = "form3";

// Specify the id of the div containing the form.
var IDofDivWithForm = "example3";

// Specify the id of the div with the content to replace the form with.
var IDforReplacement = "for_replacement";

// End of customizations.

// This line submits the form. (If Ajax processed, call Ajax function, instead.)
document.getElementById(IDofForm).submit();

// This replaces the form with the replacement content.
document.getElementById(IDofDivWithForm).innerHTML = document.getElementById(IDforReplacement).innerHTML;
}
</script>
<script type="text/javascript">
document.getElementById("example3").style.display = "block";
</script>

<script>
function myFunction() {
  var x = document.getElementById("myDIVv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
$('#test').change(function(){
    $("#seeAnotherFieldGroup")[0].selectedIndex = 0 ;
    $("#seeAnotherFieldGroup").trigger("change");
    //$('#seeAnotherFieldGroup').prop('selected', function() {
    //    return this.defaultSelected;
   // });
})

</script>
</html>