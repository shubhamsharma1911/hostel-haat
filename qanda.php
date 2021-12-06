<?php
    session_start();
    include('connect.php');
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<?php
    
    include('dbconnect.php');

    if(isset($_POST["ansubmit"])){
        function valid($data){
            $data = trim(stripslashes(htmlspecialchars($data)));
            return $data;
        }
        $answer = valid($_POST["answer"]);
        if($answer == NULL){
            echo "<script>window.alert('Please Enter something.');</script>";
        }
        else{
            $que = "";
            if($_POST["nul"]==0){
                if(strpos($_POST["preby"],$_SESSION["user"]) === false)
                    $que = "update quans set answer=CONCAT(answer,'<br>or<br>".$_POST["answer"]."'), answeredby=CONCAT(answeredby,', @ ".$_SESSION["user"]."') where question like '%".$_POST["question"]."%'";
                else
                    $que = "update quans set answer=CONCAT(answer,'<br>or<br>".$_POST["answer"]."'), answeredby = '".$_SESSION["user"]."' where question like '%".$_POST["question"]."%'";
            }
            else
                $que = "update quans set answer='".$_POST["answer"]."', answeredby = '".$_SESSION["user"]."' where question like '%".$_POST["question"]."%'";
            if(mysqli_query($conn,$que))
                echo "<style>#box0,.open{display: none;} #tb{display: block;}</style>";
            else
                header("Location: index.php");
        }
    }

?>
<?php /*
 session_start();
//if(! isset($_SESSION['user']))
//header("Location: login.php");
require_once "pdo.php";
require_once "connect.php";
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';




if ( isset($_POST['submit']) 
      
     ) {


      $que = "";
      if($_POST["nul"]==0){
          if(strpos($_POST["preby"],$_SESSION["user"]) === false)
              $que = "update ques set answer=CONCAT(answer,'<br>or<br>".$_POST["answer"]."'), answeredby=CONCAT(answeredby,', @ ".$_SESSION["user"]."') where question like '%".$_POST["question"]."%'";
          else
              $que = "update ques set answer=CONCAT(answer,'<br>or<br>".$_POST["answer"]."'), answeredby = '".$_SESSION["user"]."' where question like '%".$_POST["question"]."%'";
      }
      else
          $que = "update ques set answer='".$_POST["answer"]."', answeredby = '".$_SESSION["user"]."' where question like '%".$_POST["question"]."%'";
    }
*/


/*
if ( isset($_POST['question']) 
      
     ) {






    
    try {
        $sql = "INSERT INTO ques (question ) VALUES ( :question)";

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
  

  ':question' => $_POST['question'], 

 

  
));
    }
    catch(Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }
  
*/
   





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

  //  header( 'Location: thank-you.php' ) ;
  //  return;



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


<style>
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page 
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
} */

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  
 
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: auto;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


/* qanda style */
#box-1{
    border-right: solid 4px #aaa;
    float: left;
    padding: 100px 20px 100px 10px;
    margin-left: 60px;
}
#box-1 .heading{
    margin: 0px;
}

#box-2{
    float: left;
    margin: 100px 0;
    margin-left: 30px;
}
#box-2 #text{
    font-size: 20px;
}

#box0{
    margin-bottom: 8px;
}

#topic{
    margin: -2px -15px 10px;
    padding: 10px;
    text-align: justify;
    background: #4d79ff;
    color: #ddd;
}

#topic-head{
    display: inline-block;
    font-variant: small-caps;
    font-size: 30px;
    margin-left: 10px;
    margin-bottom: 5px;
    border-bottom: solid 3px #ddd;
}

#topic-desc{
    padding: 0 10px;
    font-size: 14px;
    text-indent: 50px;
}

#qa-block{
    box-shadow: 0 0 10px #333;
    border-radius: 10px;
    margin: 10px;
}

#Q{
    display: inline-block;
    transform: translateY(1px);
    font-size: 25px;
    font-weight: 800;
    margin-right: 5px;
    margin-left: 10px;
    color: #ddd;
}

.question{
    font-size: 18px;
    text-align: left;
    color: #ddd;
    background: #809fff;
    padding: 0 5px 5px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    box-shadow: 0 2px 10px rgba(51, 51, 51, 0.8);
}


.answer{
    text-align: justify;
    padding: 10px 45px;
}


#question{
    width: 580px;
    padding-right: 98px;
    display: inline;
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

            <div id="tb" style="display: none;">
            <h1>Thank You.<br>Stay tunned for updates.</h1>
        </div>
            <div id="example3">   <!--     
<form method="post" class="p-3" id="form3" enctype="multipart/form-data">
<div class="form-group">
<h1 style="text-align: center;color:blue">Add Resource</h1>

</br>




<p>Category:
<input type="text" name="category" size="40" class="form-control"></p> 
<div class="form-group">
<p>Your Question:
<input type="text" name="question" class="form-control" required></p>
 </p>  


         

<p><input type="submit" name="submit" value="Register" onclick="myFunction()" class="btn btn-primary"/></p>
<p style="color: red;display:none" id="myDIVv"><b>[ after Clicking submit, Please wait for confirmation message :) ]</b></p>
</div>

</form> -->


<div class="form-popup" id="myFom" method="post"  enctype="multipart/form-data">
  <form  class="form-container">
    <h1>Answer</h1>
 
   
    <input type="text" placeholder="Your Answer" name="answer" required>

    

    <button type="submit" class="btn">submit</button>
    <button  class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myFom").style.display = "block";
}

function closeForm() {
  document.getElementById("myFom").style.display = "none";
}

</script>

<?php
                    $no = 1;
                    $n = 1;
                    $nul=0; 
                    while($no < 7){
                ?>
                <div id="box<?php echo $no; ?>" class="open">
                   
                    <div id="topic">
                        <?php 
                            echo "<h2 id='topic-head'>";
                            $q = 'select name, description from category where id='.$no;
                            $r = mysqli_query($conn,$q);

                            $d = mysqli_fetch_assoc($r);
                            echo $d['name'].'</h2><p id="topic-desc">'.$d['description']."<br>Explore our home page for more questions.</p>";
                        ?>
                    </div>
                    
                    <center>
                        <?php
                            $qu = "select q.question, q.answer, q.askedby, q.answeredby from quans as q, quacat as r, category as c where q.id=r.id and r.category=c.name and c.id='$no' Limit 8";
                            $re = mysqli_query($conn,$qu);
                            while($da = mysqli_fetch_assoc($re)){
                        ?>
                        <div id="qa-block">
                            <div class="question">
                                <div id="Q">Q.</div>
                                <?php echo $da['question']."<small id='sml'>Asked By: @".$da['askedby']."</small>"; ?>
                            </div>
                            <div class="answer">
                                <?php 
                                    if($da["answer"]){
                                        $nul=0;
                                        echo $da["answer"]."<br><small>Answered By: @".$da['answeredby']."</small>";
                                    }
                                    else{
                                        $nul=1;
                                        echo "<em>*** Not Answered Yet ***</em>";
                                    }
                                ?>
                                
                                <form id="f<?php echo $n; ?>" style="margin-bottom: -25px;" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
<!--                                    <input type="button" value="Click here to answer." id="ans_b" >-->
                                    <label style="margin-bottom: -25px;"><a id="ans_b<?php echo $n; ?>" href="#area<?php echo $no; ?>"><u>Submit your answer</u></a></label>
                                    <br>
                                    <script>
                                        $(function(){
                                            $('#ans_b<?php echo $n; ?>').click(function(e){
                                                e.preventDefault();
                                                $('#area<?php echo $n; ?>').css("display","block");
                                                $('#ar<?php echo $n; ?>').css("display","block");
                                                $('#f<?php echo $n; ?>').css("margin-bottom","0px");
                                            });
                                        });
                                    </script>
                                    <textarea id="area<?php echo $n; ?>" name="answer" placeholder="Your Answer..."></textarea>
                                    <input style="display: none;" name="question" value="<?php echo $da['question'] ?>">
                                    <input style="display: none;" name="nul" value="<?php echo $nul ?>">
                                    <input style="display: none;" name="preby" value="<?php echo $da['answeredby'] ?>">
                                    <br>
                                    <input type="submit" name="ansubmit" value="Submit" class="up-in ans_sub" id="ar<?php echo $n; ?>">
                                    
                                </form>
                                

                                
                            </div>
                        </div>
                        <?php $n++; } ?>
                    </center>
                    
                </div><!-- box1 -->
                <?php
                    $no++;
                }
                ?>
            






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