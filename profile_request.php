<?php

include 'connection.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




if(isset($_POST['submit'])){
    $name=htmlspecialchars( $_POST['name']);
    $email= htmlspecialchars( $_POST['email']);
  $payment_method= htmlspecialchars( $_POST['payment_method']);
    $payment_id=htmlspecialchars($_POST['payment_id']);
    $payment_amount=htmlspecialchars($_POST['payment_amount']);
    $date=$_POST['date'];
    if($email === $_SESSION['user_email']){
    $mail = new PHPMailer(true);
    try {
       
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cashherhelpline@gmail.com';                     //SMTP username
        $mail->Password   = 'omic clwd jrkl aowx';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('cashherhelpline@gmail.com');     //Add a recipient


    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     
    
        $mail->send();
        $insert_request="INSERT INTO `payment_request` (name,email,payment_method,payment_id,payment_amount,date) VALUES(?,?,?,?,?,?) ";
        $insert_request_stmt=$pdo->prepare($insert_request);
        $insert_request_stmt->bindParam(1,$name);
        $insert_request_stmt->bindParam(2,$email);
        $insert_request_stmt->bindParam(3,$payment_method);
        $insert_request_stmt->bindParam(4,$payment_id);
        $insert_request_stmt->bindParam(5,$payment_amount);
        $insert_request_stmt->bindParam(6,$date);
        $insert_request_stmt->execute();
      if($insert_request_stmt){
       $messagedone[]= 'We got your request';
        
      }

    } catch (Exception $e) {
        $messageerror[]="Message could not be sent check you firewall or proxy or login with other device";
    }

}else{
    $messageerror[]='Check your email id';
}



}




?>
