<?php

include 'connection.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


 function send_password_reset($get_email,$token){



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cashbringofficial@gmail.com';                     //SMTP username
    $mail->Password   = 'aujm ybiz xslv mjni';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cashbringofficial@gmail.com');
    $mail->addAddress($get_email);     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password reset';
    $email_template="
    <h2>Hello</h2>
    <h3>This is a passowrd test</h3>
    <a href='http://localhost/coloshop-master/password_reset_main?token=$token&email=$get_email' >This is link for password reset please do not share wirth anyone</a>
";
    $mail->Body=$email_template;
    $mail->send();

    $messagedone[]= 'Message has been sent';
} catch (Exception $e) {
    $messageerror[]='check your firewall or intertnet or login via another device';
   
}
 }

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $token=bin2hex(random_bytes(16));

    
    $SelectEmail="SELECT email FROM `users` WHERE email=? LIMIT 1";
    $EmailSelect=$pdo->prepare($SelectEmail);
    $EmailSelect->bindParam(1,$email);
    $EmailSelect->execute();
    if($EmailSelect->rowCount()>0){
    while($EmailResult=$EmailSelect->fetch(PDO::FETCH_ASSOC)){
       
        $get_email=$EmailResult['email'];
        $UpdateToken="UPDATE `users` SET verify_token=? WHERE email=? LIMIT 1";
        $UpdateTokenStmt=$pdo->prepare($UpdateToken);
        $UpdateTokenStmt->bindParam(1,$token);
        $UpdateTokenStmt->bindParam(2,$email);
        $UpdateTokenStmt->execute();
        if($UpdateTokenStmt){
            send_password_reset($get_email,$token);
            $messagedone[]="We emailed you a message";
            
            

        }else{
            $messageerror[]="Something went wrong";
            header('Location:password-reset');
        
        }


    }
    
    }else{
        $messageerror[]="No email found";
    
    }

    
}
if(isset($_POST['password_update'])){
    $email=$_POST['email'];
    $new_password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $token=$_POST['token'];

    if(!empty($token)){
        if(!empty($email) && !empty($new_password) && !empty($cpassword)){
            $Selectusers="SELECT verify_token FROM `users` WHERE verify_token=? LIMIT 1";
            $SelectusersStmt=$pdo->prepare($Selectusers);
            $SelectusersStmt->bindParam(1,$token);
            $SelectusersStmt->execute();
            if($SelectusersStmt->rowCount()>0){
                if($new_password === $cpassword){
                    $hashedPassword=password_hash($new_password,PASSWORD_DEFAULT);
                $update_password="UPDATE `users` SET password=? WHERE verify_token=? LIMIT 1 ";
                $update_password_stmt=$pdo->prepare($update_password);
                $update_password_stmt->bindParam(1,$hashedPassword); 
                $update_password_stmt->bindParam(2,$token); 
                $update_password_stmt->execute();
                if($update_password_stmt){
                    $newToken=bin2hex(random_bytes(16));
                    $tokenUpdate="UPDATE `users` SET verify_token=? WHERE verify_token=? LIMIT 1";
                    $tokenUpdateStmt=$pdo->prepare($tokenUpdate);
                    $tokenUpdateStmt->bindParam(1,$newToken);
                    $tokenUpdateStmt->bindParam(2,$token);
                    $tokenUpdateStmt->execute();
                     
                    $messagedone[]= "New password successfully updated";
                    
                    header("Location:login");
                }
                }else{
                   $messageerror[]= "something went wrong check both passwords you enterd";
                  
               
                }

            }else{
                $messageerror[]= "Token expired or invalid token";
            
            }

        }else{
            $messageerror[]="All fields are mandatory";
            
        }


    }else{
        $messageerror[]= "We facing some issues while generating token";
        

    }

}




?>