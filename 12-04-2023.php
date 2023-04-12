<?php  

//   use PHPMailer/PHPMailer,
//   use PHPMailer/Exception,
//   use PHPMailer/SMTP,
     session_start();
// taking mailer and smtp required file to send 
    // require 'PHPMailer/PHPMailerAutoload.php';
    require 'PHPMailer/SMTP';
    require 'PHPMailer/class.phpmailer';
    require 'PHPMailer/Exception'
    // require 'PHPMailer/mail()';
  
    //  $result="";
     
     
      // Setting URL
        // $isSecure = 'true';
        // $if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        //     $isSecure = 'https';
        // }
        // elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
        //     $isSecure = 'https';
        // }else{
        //     $isSecure = 'http';
        // }
        // $REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';
        
     
     
     
     
//   if (empty($name) || empty($email) || empty($message)) {
//         echo "Please fill in all required fields.";
//         exit;
//     }
    
    // $mail->isSMTP();
    // mail=new PHPMailer(true);
    
    // if(isset($_GET['email'])){
    //         $email = $_GET['email'];
    //     }

    //  $mailBody = "';
    
    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP(true);                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'divyanshutripathi7826@gmail.com';                     // SMTP username
    $mail->Password   = '9695ddhh98';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->addAddress('divyanshutripathi2076@gmail.com');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Website Contact Form: '.$_POST['name'];
    $mail->Body    = '$_POST['name']',$_POST['email'],$_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    
    
   if($mail->send()){
                $_SESSION['mailSent'] = 'Hurray! Activated';
                ?>
                    <script>
                        alert("HURRAY! ACTIVATED");
                        location.replace('homepage.php');

                    </script>
                <?php
            }
        } catch (Exception $e) {
            $_SESSION['mailSent'] = "Mailer Error: {$mail->ErrorInfo}";
            ?>

                <script>
                    location.replace('index.html');
                </script>
            <?php
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






