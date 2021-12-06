<?php
    session_start();
    if( isset($_SESSION['user'])){
      header("Location: profile.php");
  }
    include("dbconfig.php");
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


  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<?php include("header.php") ?>
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        
        <p>SignUp</p>
      </header>

      <div class="row gy-4" >
      <div class="col-lg-6">

<div class="row gy-4">
  <img src="images/login.png" alt="">
</div>

</div>
<div class="col-lg-6" id="myForm">
       
<form  method="post" name="signup"  class="loginform" onSubmit="return valid();">
<div class="row gy-4" >
                        <div class="form-group form-input">
                              <input name="name"  type="text"  placeholder="Name" class="form-control" required>
                        </div>
                        
                        <div class="form-group form-input" > 
                             <input type="text" class="form-control" minlength="4" maxlength="10" name="rollno" id="rollno" onBlur="checkidAvailability()" placeholder="Roll Number" value="" required />
                             <span id="user-id-availability-status" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group form-input">
                              <input type="email" class="form-control" name="email" id="email" onBlur="checkemailAvailability()" placeholder="Email Address" required="required">
                              <span id="user-email-availability-status" style="font-size:12px;"></span> 
                        </div>

                        <div class="form-group form-input">
                        <input name="insname"  type="text"  placeholder="Institute Name"  class="form-control" required>
                        </div>
                        
                        <div class="form-group form-input">
                          <input name="password"  type="password"  placeholder="Create a Strong Password"  class="form-control" required>
                        </div>
                        <div class="form-group form-input">
                          <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                        </div>

                        <div class="g-recaptcha"  data-sitekey="6LcjZuQaAAAAADiE76PVZdDJYaeLObhZzWa3zbrN"></div>
      <br/>

                        <div class="col-md-12 text-center">
                           
                               <input name="signup" type="submit" value="Create An Account" id="submit" onclick="submitform()" class="up-in">
                             <a href="login.php"> <input type="button" value="or Log In" class="getstarted" id="tolog"> </a>
                           
                        </div>
                      
                    <a href="contact.php" id="trouble"><span>Having Trouble in login ? Contact Us</span></a>
</div>
                    </form>
                    <?php
//STEP 4: CREATE A QUERY THAT WILL POST THE FORM FIELD DATA INTO THE DATABASE--
// I USED PDO IF YOU WANT HOW TO USE MySQLI PLEASE LEAVE A COMMENT
// code submit data
if(isset($_POST['signup']))
{
$fname=$_POST['name'];
$email=$_POST['email']; 
$mobile=$_POST['insname'];
$idno=$_POST['rollno'];
$password=$_POST['password']; 
$sql="INSERT INTO  student (name,email,institute,rollno,password) VALUES(:fname,:email,:mobile,:rollno,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':rollno',$idno,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
header("Location: rlogin.php");
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
//PLEASE TEST YOUR TO ENSURE IT IS SUBMITING THE DATA INTO DATABASE BEFORE YOU PROCEDE  TO THE NEXT STEP
?>

        
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
  
	<!-- Loading Scripts -->
	    <!-- Sripts -->
        
      <script>
//This function checks email-availability-status
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkidAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'rollno='+$("#rollno").val(),
type: "POST",
success:function(data){
$("#user-id-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

//Finally add a function that will check if password 1 and password 2 match, It is called by the form using |onSubmit="return valid();"|
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}

</script>
<script> 
    function submitform(){ 
        $('#registeration').find('form').submit(); 
        $('.clearFields').val(''); 
    } 
</script> 

				<!-- JS -->
				<!--This will facilitate process of background tasks-->
    <script src="js/jquery.min.js"></script>


 

</body>

</html>