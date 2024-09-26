<?php
session_start();
include 'connection.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader




if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $mail = new PHPMailer(true);
    try {
        //Server settings
                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cashbringofficial@gmail.com';                     //SMTP username
        $mail->Password   = 'aujm ybiz xslv mjni';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('cashbringofficial@gmail.com');     //Add a recipient


    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     
    
        $mail->send();
        $_SESSION['success_message'] = 'Message has been sent';
         header('Location:contact-success');
      exit();
    } catch (Exception $e) {
        $_SESSION['error_message'] = 'Message could not be sent check you firewall or proxy or login with other device.';
      header('Location:contact-success');
        exit();
        

    }


}

?>