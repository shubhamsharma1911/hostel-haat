
<?php
 session_start();
if(! isset($_SESSION['user']))
header("Location: login.php");
require_once "pdo.php";
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if ( isset($_POST['category']) && isset($_POST['title']) 
     && isset($_POST['campus']) && isset($_POST['ma_name']) && isset($_POST['ma_rollno']) && isset($_POST['ma_email']) && isset($_POST['l_name'])
     && isset($_POST['l_rollno']) && isset($_POST['l_email']) && isset($_POST['l_phno'])
     
     && isset($_POST['mb_name'])
     && isset($_POST['mb_rollno']) && isset($_POST['mb_email']) 
     && isset($_POST['mc_name'])
     && isset($_POST['mc_rollno']) && isset($_POST['mc_email']) 
     && isset($_POST['md_name'])
     && isset($_POST['md_rollno']) && isset($_POST['md_email']) 
     && isset($_POST['me_name'])
     && isset($_POST['me_rollno']) && isset($_POST['me_email']) 
     && isset($_POST['mf_name'])
     && isset($_POST['mf_rollno']) && isset($_POST['mf_email']) 
     && isset($_POST['mi_name'])
     && isset($_POST['mi_rollno']) && isset($_POST['mi_email']) 
     

      
     ) {

    // Data validation
    
    $l_email = $_POST['l_email'];
    $l_name = $_POST['l_name'];
    $l_rollno = $_POST['l_rollno'];
 
  $teamid = uniqid();




    $sql = "INSERT INTO cult (category, title, campus, l_name, l_rollno, l_email, l_phno, ma_name, ma_rollno, ma_email, mb_name, mb_rollno, mb_email 
    , mc_name, mc_rollno, mc_email , md_name, md_rollno, md_email , me_name, me_rollno, me_email , mf_name, mf_rollno, mf_email , mg_name, mg_rollno, mg_email 
    , mh_name, mh_rollno, mh_email , mi_name, mi_rollno, mi_email 
   , teamid) 
              VALUES (:category, :title, :campus, :l_name, :l_rollno, :l_email, :l_phno, :ma_name, :ma_rollno, :ma_email, :mb_name, :mb_rollno, :mb_email
              , :mc_name, :mc_rollno, :mc_email , :md_name, :md_rollno, :md_email , :me_name, :me_rollno, :me_email , :mf_name, :mf_rollno, :mf_email , :mg_name, :mg_rollno, :mg_email 
    , :mh_name, :mh_rollno, :mh_email , :mi_name, :mi_rollno, :mi_email 
              ,  :teamid)";
   
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        
        ':category' => $_POST['category'], 
        ':title' => $_POST['title'], 
        ':campus' => $_POST['campus'], 
       
        ':l_name'=> $_POST['l_name'], 
        ':l_rollno'=> $_POST['l_rollno'], 
        ':l_email'=> $_POST['l_email'], 
        ':l_phno'=> $_POST['l_phno'], 
        ':ma_name' => $_POST['ma_name'], 
        ':ma_rollno' => $_POST['ma_rollno'], 
        ':ma_email'=> $_POST['ma_email'], 
        ':mb_name'=> $_POST['mb_name'], 
        ':mb_rollno'=> $_POST['mb_rollno'], 
        ':mb_email'=> $_POST['mb_email'], 
        ':mc_name'=> $_POST['mc_name'],
         ':mc_rollno'=> $_POST['mc_rollno'], 
         ':mc_email' => $_POST['mc_email'], 
         ':md_name'=> $_POST['md_name'], 
         ':md_rollno'=> $_POST['md_rollno'], 
         ':md_email' => $_POST['md_email'], 
         ':me_name'=> $_POST['me_name'], 
         ':me_rollno'=> $_POST['me_rollno'], 
         ':me_email' => $_POST['me_email'], 
         ':mf_name'=> $_POST['mf_name'], 
         ':mf_rollno'=> $_POST['mf_rollno'], 
         ':mf_email' => $_POST['mf_email'], 
         ':mg_name'=> $_POST['mg_name'], 
         ':mg_rollno'=> $_POST['mg_rollno'], 
         ':mg_email' => $_POST['mg_email'], 
         ':mh_name'=> $_POST['mh_name'], 
         ':mh_rollno'=> $_POST['mh_rollno'], 
         ':mh_email' => $_POST['mh_email'], 
         ':mi_name'=> $_POST['mi_name'], 
         ':mi_rollno'=> $_POST['mi_rollno'], 
         ':mi_email' => $_POST['mi_email'],
       ':teamid'=> $teamid,
      

        
    ));
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
      $mail->Subject = 'Welcome to Hostel-haat family';
      $mail->Body = "

      <h2>Congratulations! $l_name<h2>
      <h3>You have successfully registered for hostel-night 2021<h3>
     <h3>Your Team Registration ID is $teamid. Keep this ID with you for future reference.</h3>
     <h3>Your details are:<h3>
     <table >
        <tr><th>Name</th><th>Email</th><th>Roll No</th></tr>
        <tr><td>$l_name</td><td>$l_email</td><td>$l_rollno</td></tr>
   
      </table>
    <p>If you have any event-specific doubts, then please contact the event managers whose contact details are available on that competition's page. 
    If your queries are not addressed, feel free to contact our Head, Events </p>
    <p>(*prefer WhatsApp)</p>
   
    <p>Mr. Shubham Sharma (+91-9079358093)</p>
 
    <p>Thank You</p>
    <p>Team Hostel-haat 2021</p>

      ";
    
      $mail->send();
    } 

    header( 'Location: thank-you.php' ) ;
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
    

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog" style="margin-top: 80px;">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              
<form method="post" class="p-3" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
<div class="form-group">
<h1 style="text-align: center;color:blue">Event Registration</h1>
<p style="color: red;text-align: center;"><b>[Only for IKGPTU Main Campus and constituent Campuses]</b></p>
</br>



<!--
<p>Category:
<input type="text" name="category" size="40" class="form-control"></p> -->
<div class="form-group">
<p>Choose Your Event :
<select class="form-control classic" name="category" id="test"  onchange="showDiv()" >
                <option value="1">Instrumental Solo </option>
                <option value="2">Vocal Solo </option>
                <option value="3">Folk Solo </option>
                <option value="4">Group Song </option>
                <option value="5" >Folk Solo Dance </option>
                <option value="6">Folk Group Dance </option>
                <option value="7">Solo Dance </option>
                <option value="8">Group Dance </option>
                <option value="9">Cartooning </option>
                <option value="10">Digital Poster Making </option>
                <option value="11" selected>Poster Making </option>
                <option value="12">Poem Recitation </option>
              
          </select> </p>  

       


<p>Team Name :
<input type="text" name="title" class="form-control" required></p>
<p>Campus :
<select class="form-control classic" name="campus" >
            <option value="Main">Main Campus</option>
			<option value="Amritsar">Amritsar Campus</option>
			<option value="Hoshiarpur">Hoshiarpur Campus</option>
			<option value="Mohali1">Mohali-I Campus</option>
			<option value="Mohali2">Mohali-II Campus</option>
          </select> </p>
</div>
</br>
<h2>Team Details :</h2>
<p>Choose Number of Team Members : </p>
        <div class="form-group" >
         
          <select class="form-control classic" id="seeAnotherFieldGroup"  required>
         
      
                <option value="1_one" selected>One</option>
                <option value="2_one" >One</option>
                <option value="3_one" >One</option>
                <option value="5_one" >One</option>
                <option value="7_one" >One</option>
                <option value="9_one" >One</option>
                <option value="10_one" >One</option>
                <option value="11_one" >One</option>
                <option value="12_one" >One</option>


            

                <option value="4_three">Three</option> 
                <option value="4_four">Four</option>
                <option value="4_five">Five</option>
                <option value="4_six">Six</option>

            
               

                <option value="6_three">Three</option> 
                <option value="6_four">Four</option>
                <option value="6_five">Five</option>
                <option value="6_six">Six</option>
                <option value="6_seven">Seven</option>
                <option value="6_eight">Eight</option>
                <option value="6_nine">Nine</option>
                <option value="6_ten">Ten</option>

                
                <option value="8_three">Three</option> 
                <option value="8_four">Four</option>
                <option value="8_five">Five</option>
                <option value="8_six">Six</option>
                <option value="8_seven">Seven</option>
                <option value="8_eight">Eight</option>
                <option value="8_nine">Nine</option>
                <option value="8_ten">Ten</option>
          </select>
        </div>
      
        </br>
        <div class="form-group" id="otherFieldGroupDiv1">
          <h2>Team Leader :</h2>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="l_name" class="form-control w-100" id="otherField1" required>
            </div>
            
            <div class="col-lg-6 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="l_rollno" class="form-control w-100" id="otherField1" required>
            </div>
          </div>
          <div class="row">
            </br>
            <div class="col-lg-6 col-md-12">
              <label for="otherField2">Email</label>
              <input type="email" name="l_email" class="form-control w-100" id="otherField2" required>
            </div>
            
            <div class="col-lg-6 col-md-12">
              <label for="otherField1">Phone Number</label>
              <input type="text" name="l_phno" class="form-control w-100" id="otherField1" required>
            </div>
          </div>
          
          </br>
        </div>
        
        <div class="form-group" id="otherFieldGroupDiv2">
     <h2>Other Members :</h2>
     <div class="row">
            <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="ma_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="ma_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="ma_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        
        <div class="form-group" id="otherFieldGroupDiv3">
   
        <div class="row">
        <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="mb_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="mb_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="mb_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
       
        <div class="form-group" id="otherFieldGroupDiv4">
         
          <div class="row">
          <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="mc_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="mc_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="mc_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        <div class="form-group" id="otherFieldGroupDiv5">
         
          <div class="row">
          <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="md_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="md_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="md_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        <div class="form-group" id="otherFieldGroupDiv6">
         
          <div class="row">
          <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="me_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="me_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="me_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        <div class="form-group" id="otherFieldGroupDiv7">
         
          <div class="row">
          <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="mf_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="mf_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="mf_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        <div class="form-group" id="otherFieldGroupDiv8">
         
          <div class="row">
          <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="mi_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="mi_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="mi_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        <div class="form-group" id="otherFieldGroupDiv9">
         
          <div class="row">
          <div class="col-lg-4 col-md-12">
              <label for="otherField1">Name </label>
              <input type="text" name="mj_name" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-lg-3 col-md-12">
              <label for="otherField1">Roll Number </label>
              <input type="text" name="mj_rollno" class="form-control w-100" id="otherField1">
            </div>
         
         
            <div class="col-lg-5 col-md-12">
              <label for="otherField2">Email</label>
              <input type="text" name="mj_email" class="form-control w-100" id="otherField2">
            </div>
          
            </div>
          
          </br>
        </div>
        

<div class="form-group" >

<p>
<input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
</p>
<p><input type="submit" name="submit" value="Register" class="btn btn-primary" onclick="myFunction()"/></p>
<p style="color: red;display:none" id="myDIVv"><b>[ after Clicking submit, Please wait for confirmation message :) ]</b></p>
</div>

</form>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="form3.js"></script>

            </article><!-- End blog entry -->

           
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar"><h3 class="sidebar-title" style="text-align: center;">EVENT GUIDELINES</h3>
          
            <div id="hidden_div1" style="display: none;">
            
                •	No. of Participants : 01</br>
•	Time Duration : 3 to 4 minutes </br>
•	Maximum number of accompanists is 02</br>
•	Judgment will be based on the qualities like Swar, Taal, Selection of Raag, composition and general impression. 

            
            </div>
            
            <div id="hidden_div2" style="display: none;">
            
            •	No. of Participants: 01</br>
•	Time Duration: 1 to 4 minutes </br>
•	Time for stage/Instruments setting : upto 1 minutes </br>
•	Maximum number of accompanists is 02</br>
•	Judgment will be based on the qualities like Swar, Taal, Selection of Raag, composition and general impression. 


            
            </div>
            <div id="hidden_div3" style="display: none;">
            
            •	No. of Participants: 01</br>
•	Time Duration: 3 to 4 minutes </br>
•	Time for stage/Instruments setting : upto 2 minutes </br>
•	Maximum number of accompanists is 02</br>
•	Judgment on the basis of qualities like voice, Swar, Taal, Composition and General impression etc. 

            
            </div>
            <div id="hidden_div4" style="display: none;">
            
            •	No. of Participants: 3 to 6</br>
•	Time Duration: 4 to 5 minutes </br>
•	Time for stage/Instruments setting : upto 2 minutes </br>
•	Maximum number of accompanists is 03</br>
•	The group song should be taken from Indian songs.


            
            </div>
            <div id="hidden_div5" style="display: none;">
            
            •	No. of Participants: 1</br>
•	Time Duration: 3 to 5 minutes </br>
•	Time for stage/Instruments setting : upto 2 minutes </br>
•	Only one form of Indian Dances will be allowed under this category. A dance form from any state of Indian Union is allowed.</br>
•	Actions of the performance shall be in accordance with the traditional forms of that particular state dance.</br>
•	The Time will be counted with effect from first beat/Action/Singing/Voice of the instrument.</br>
•	The participating team will be responsible for removal of their sets, properties etc. immediately after the completion of their performance. </br>
•	Judgement will be based on the basis  of rhythm, formation, expression, costumes, makeup and set of overall effects.


            
            </div>
            <div id="hidden_div6" style="display: none;">
            
            •	No. of Participants: 3 to 10</br>
•	Time Duration: 3 to 5 minutes </br>
•	Time for stage/Instruments setting : upto 2 minutes </br>
•	Only one form of Indian Dances will be allowed under this category. A dance form from any state of Indian Union is allowed.</br>
•	Actions of the performance shall be in accordance with the traditional forms of that particular state dance.</br>
•	The Time will be counted with effect from first beat/Action/Singing/Voice of the instrument.</br>
•	The participating team will be responsible for removal of their sets, properties etc. immediately after the completion of their performance. </br>
•	Judgement will be based on the basis  of rhythm, formation, expression, costumes, makeup and set of overall effects.



            
            </div>
            <div id="hidden_div7" style="display: none;">
            •	No. of Participants: 1</br>
•	Time Duration: upto 5 minutes </br>
•	Time for stage/Instruments setting : upto 2 minutes 



            
            </div>
            <div id="hidden_div8" style="display: none;">
            •	No. of Participants: upto 10</br>
•	Time Duration: upto 5 minutes </br>
•	Time for stage/Instruments setting : upto 2 minutes




            
            </div>
            <div id="hidden_div9" style="display: none;">
            •	No of Participants: 01</br>
•	Time Durations: maximum time 1 hour & 30 minutes</br>
•	Sheet Size (22”×15”)</br>
•	The Items will be conducted on the given topic/subject on the spot.</br>
•	Idea should be innovative & original.</br>
•	Participant will bring their own material required for the contest. Only the paper/sheet will be provided by the host Institute. 



            
            </div>
            <div id="hidden_div10" style="display: none;">
            •	No of Participants: 01</br>
•	Time Durations: maximum time 1 hour & 30 minutes</br>
•	The organizers will have all rights for the use of these pictures as and when they deem fit.</br>
•	Digital images are evaluated on the basis of Impact Composition Technical Quality and Suitability for the specific theme.</br>
•	The item will be conducted on the spot on the given topic/subject/theme.</br>
•	Additional Instructions will be announced on the spot. 



            
            </div>
            <div id="hidden_div11" style="display: block;">
            •	No of Participants: 01</br>
•	Time Durations: maximum time 1 hour & 30 minutes</br>
•	Sheet Size (22”×15”)</br>
•	Topic/theme will be given on the spot.</br>
•	Participant will bring their own material required like brushes, paints etc. Only the paper/sheet will be provided by the host institute. 




            
            </div>
            <div id="hidden_div12" style="display: none;">
            •	No. of Participants: 01</br>
•	Time Duration: upto 3 minutes</br>
•	Languages: English, Hindi, Punjabi, Urdu (only one language should be followed)</br>
•	The Poem should be self composed and it should be poetry not a song.</br>
•	The performance will be judged in one language.





            
            </div>
    
	<br /><br />
  <h3 class="sidebar-title" style="text-align: center;">For Queries Contact:</h3>

  <div class="blog-author d-flex align-items-center" >
              <img src="images/shubham-removebg-preview.png" class="rounded-circle float-left" alt="">
              <div>
                <h4>Shubham Sharma</h4>
                <div class="social-links">
                  <a href="https://wa.link/jqtcib"><i class="bi bi-whatsapp"></i></a>
                  <a href="mailto:shubham.ikgptu@gmail.com"><i class="bi bi-envelope"></i></a>
            
                </div>
                
              </div>
        </div>

              <h3 class="sidebar-title" style="text-align: center;">GENERAL INSTRUCTIONS</h3>
              <div class="sidebar-item categories">
              •	There should be not be any type of Vulgarity or obscenity in actions, Costumes or Wording. </br>
•	The participating team will be responsible for removal of their sets, properties etc immediately after the completion of their performance.  </br>
•	Sufficient thoughts and care should be implemented while presentation of item i.e. it should not be injurious to Personal or Religious sentiments of any individual, community or Nationality. 

              </div><!-- End sidebar categories-->
              
              
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
   
  </main><!-- End #main -->
  <?php include('footer.php');?>
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

<script>
$(document).ready(function() {
    $("#seeAnotherFieldGroup").children('option:gt(0)').hide();
    $("#test").change(function() {
        $("#seeAnotherFieldGroup").children('option').hide();
        $("#seeAnotherFieldGroup").children("option[value^=" + $(this).val() + "]").show()
    })
});

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