<?php  

//   use PHPMailer/PHPMailer,
//   use PHPMailer/Exception,
//   use PHPMailer/SMTP,

// taking mailer and smtp required file to send 
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'PHPMailer/class.smtp.php';
    require 'PHPMailer/class.phpmailer.php';
  
  
  $result="";
  
//   if (empty($name) || empty($email) || empty($message)) {
//         echo "Please fill in all required fields.";
//         exit;
//     }
    
    // $mail->isSMTP();
    $mail=new PHPMailer(true);
    
    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP(true);                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'divyanshutripathi7826@gmail.com';                     // SMTP username
    $mail->Password   = '9695ddhh98';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->addAddress('divyanshutripathi2076@gmail.com');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Website Contact Form: '.$_POST['name'];
    $mail->Body    = '***';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




    // Sending an Attachment  with the mail to the form submitter
    // $mail->addAttachment('./Assets/Broucher.pdf');
    
    
//   Checking mail address and php mailer configuration for the smtp server 
// making the form body to align the text at the center on reciepent mail address
//   if(isset($_POST['submit'])){
//     require 'PHPMailerAutolaod.php';
//     $mail =new PHPMailer;
    
//     ini_set('display_errors',1);
//     ini_set('display_startup_errors',1);
//     error_reporting(E_ALL);
    
//     $mail->Host="https://smtp.gmail.com";
//     $maill->Port=587;
//     $mail->SMTPAuth=true;
//     $SMTPSecure='tls';
    
    
       
//   $mail->UserName='divyanshutripathi7826@gmail.com' ;
//   $mail->Password='9695ddhh98';
   
   
//   $mail->setFrom='$_POST['email'].$_POST['name'];
//   $mail->setFrom='$_POST['email'],$_POST['name'];
//   $mail->addAdress('divyanshutripathi2076@gmail.com');
//   $mail->addReplyTo('$_POST['email'],$_POST['name']');
// //   
//   $mail->isHTML(true);
   
//   $mail->Subject='form Submission from Golf Hills'.$_POST['meassage'];
   
//   $mail->Body='<h1 align='center' Name:'. $_POST['name'].'<br>Email:'.$_POST['email'].'<br>Message:'.$_POST['message'].'</h1>';
   
//   if(!$mail->send()){
//       $result="Something went wrong plaese try Again.";
//   }else{
//       $result+"Thanks".$_POST['name']."for submitting form We will get back to you";
//   }
  
//   }
 

















// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Get the form data
//   $name = $_POST["name"];
//   $email = $_POST["email"];
//   $message =$_POST["message"];

//   // Build the email message
//   $to = "divyanshu.tripathi@inframantra.com";
//   $subject = "New form submission";
//   $message = "Name: $name\nEmail: $email\n Message: $message";

//   // Send the email
//   mail($to, $subject, $message);

//   // Redirect the user to a thank you page
//   header("Location: thank-you.html");
//   exit;
// }
// ?>



































// <?php
//   require "PHPMaile.phpr";
//   require "mail_test.php"
   
   
//   if($_POST) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if (empty($name) || empty($email) || empty($message)) {
//         echo "Please fill in all required fields.";
//         exit;
//     }

//     $to =  "divyanshu.tripathi@inframantra.com";
//     $subject = "New message from your M3M GOlf Hills : $email";
//     $headers = "From: $email";
//     $body = "Name: $name\nEmail: $email\nMessage: $message";

//     if ($mail($to, $subject, $body, $headers)) {
//         echo "Thank you for your message!";
//     } else {
//         echo "There was a problem sending your message. Please try again later.";
//     }
//   }
// ?>  


// 2023-04-11 13:27:27 SMTP ERROR: Failed to connect to server: Network is unreachable (101)
SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
Message could not be sent. Mailer Error: SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting //



Error log



<!--  -->   


[10-Apr-2023 08:48:10 UTC] PHP Parse error:  syntax error, unexpected ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 54
[10-Apr-2023 08:48:15 UTC] PHP Parse error:  syntax error, unexpected ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 54
[10-Apr-2023 08:48:16 UTC] PHP Parse error:  syntax error, unexpected ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 54
[10-Apr-2023 08:48:19 UTC] PHP Parse error:  syntax error, unexpected ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 54
[10-Apr-2023 08:50:38 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 25
[10-Apr-2023 08:50:40 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 25
[10-Apr-2023 08:50:41 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 25
[10-Apr-2023 08:53:58 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 08:54:01 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 01:54:32 America/Phoenix] PHP Notice:  Undefined index: OS in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail_test.php on line 3525
[10-Apr-2023 09:05:27 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:05:33 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:06:13 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:08:13 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:08:15 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:11:30 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:11:37 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:40:49 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 28
[10-Apr-2023 09:56:47 UTC] PHP Parse error:  syntax error, unexpected 'if' (T_IF) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 5
[10-Apr-2023 09:56:56 UTC] PHP Parse error:  syntax error, unexpected 'if' (T_IF) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 5
[10-Apr-2023 10:56:43 UTC] PHP Parse error:  syntax error, unexpected 'if' (T_IF) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 6
[10-Apr-2023 12:28:38 UTC] PHP Parse error:  syntax error, unexpected '--' (T_DEC) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 22
[11-Apr-2023 05:53:09 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 05:57:31 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 05:58:46 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 06:11:52 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 06:12:09 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 10:36:17 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 11:02:59 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 11:34:06 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 11:34:06 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 11:35:06 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 11:35:09 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 41
[11-Apr-2023 11:38:28 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 43
[11-Apr-2023 11:39:47 UTC] PHP Parse error:  syntax error, unexpected 'email' (T_STRING) in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 43
[11-Apr-2023 11:55:37 UTC] PHP Parse error:  syntax error, unexpected '/', expecting ';' or ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 3
[11-Apr-2023 11:57:17 UTC] PHP Parse error:  syntax error, unexpected '/', expecting ';' or ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 3
[11-Apr-2023 11:57:37 UTC] PHP Parse error:  syntax error, unexpected '/', expecting ';' or ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 3
[11-Apr-2023 13:11:54 UTC] PHP Parse error:  syntax error, unexpected '/', expecting ';' or ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 3
[11-Apr-2023 13:12:24 UTC] PHP Parse error:  syntax error, unexpected '/', expecting ';' or ',' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 3
[11-Apr-2023 13:12:48 UTC] PHP Parse error:  syntax error, unexpected '<', expecting end of file in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 96
[11-Apr-2023 13:13:23 UTC] PHP Warning:  require(PHPMailer/PHPMailerAutoloader.php): failed to open stream: No such file or directory in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 8
[11-Apr-2023 13:13:23 UTC] PHP Fatal error:  require(): Failed opening required 'PHPMailer/PHPMailerAutoloader.php' (include_path='.:/opt/alt/php74/usr/share/pear') in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 8
[11-Apr-2023 13:14:28 UTC] PHP Deprecated:  __autoload() is deprecated, use spl_autoload_register() instead in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/PHPMailer/PHPMailerAutoload.php on line 45
[11-Apr-2023 13:15:00 UTC] PHP Notice:  Undefined variable: mail in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 20
[11-Apr-2023 13:15:00 UTC] PHP Fatal error:  Uncaught Error: Call to a member function isSMTP() on null in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php:20
Stack trace:
#0 {main}
  thrown in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 20
[11-Apr-2023 13:15:52 UTC] PHP Notice:  Undefined variable: mail in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 20
[11-Apr-2023 13:15:52 UTC] PHP Fatal error:  Uncaught Error: Call to a member function isSMTP() on null in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php:20
Stack trace:
#0 {main}
  thrown in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 20
[11-Apr-2023 13:16:28 UTC] PHP Fatal error:  Uncaught Error: Undefined class constant 'ENCRYPTION_STARTTLS' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php:31
Stack trace:
#0 {main}
  thrown in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 31
[11-Apr-2023 13:19:57 UTC] PHP Fatal error:  Uncaught Error: Undefined class constant 'ENCRYPTION_STARTTLS' in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php:31
Stack trace:
#0 {main}
  thrown in /home/e8bqlkczcclp/public_html/m3mproject-gurgaon.com/mail.php on line 31
