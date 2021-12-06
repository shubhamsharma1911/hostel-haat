<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $phno = $_POST['phno'];
  $subject = $_POST['subject'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aavahan.ptu@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'TechFest@Ptu.2021'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';
  
    $mail->setFrom('aavahan.ptu@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('engtuts1911@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
  
   
    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Us Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone Number: $phno<br>subject : $subject<br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
