<?php
session_start();
include 'connection.php';


if(isset($_POST['newsletter_submit'])){
    $email=htmlspecialchars($_POST['email']);

    $SelectEmail="SELECT email FROM `users` WHERE email=? LIMIT 1";
    $SelectEmail_Stmt=$pdo->prepare($SelectEmail);
    $SelectEmail_Stmt->bindParam(1,$email);
    $SelectEmail_Stmt->execute();
    if($SelectEmail_Stmt->rowCount()>0){
    
        $row = $SelectEmail_Stmt->fetch(PDO::FETCH_ASSOC);
    
        if($email === $_SESSION['user_email'] ){
            $isSubscribedQuery = "SELECT news_letter_email FROM `users` WHERE email=? AND news_letter_email IS NOT NULL LIMIT 1";
            $isSubscribedStmt = $pdo->prepare($isSubscribedQuery);
            $isSubscribedStmt->bindParam(1, $_SESSION['user_email']);
            $isSubscribedStmt->execute();
            
            if($isSubscribedStmt->rowCount() > 0){
                $errors[]= "You are already subscribed.";
            }else{
                $insert_email="UPDATE `users` SET news_letter_email=? WHERE email=? LIMIT 1";
                $insert_email_stmt=$pdo->prepare($insert_email);
                $insert_email_stmt->bindParam(1,$email);
                $insert_email_stmt->bindParam(2,$_SESSION['user_email']);
                $insert_email_stmt->execute();
                if($insert_email_stmt){
                    $done[]="Thanks for subscribing our newsletter";
                    }else{
                        echo "";
                    }

            }
           
           
           

        }else{
         

           $errors[]="You cannot use someone else's email";
           
           
        }
    }else{
        $errors[]="You cannot use someone else's email";
    }
if(isset($errors)){
    $_SESSION['error']=$errors;
    header('location:error');
}else if(isset($done)){
    $_SESSION['done']=$done;
    header('location:succsess');
}
    
}

?>
