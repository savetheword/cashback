<?php

include 'connection.php';

if(isset($_POST['change-password'])){
    $current_password=htmlspecialchars($_POST['current-password']);
    $new_password=htmlspecialchars($_POST['new-password']);
    $confirm_password=htmlspecialchars($_POST['confirm-password']);

    $select_password="SELECT password FROM `users` WHERE email=? LIMIT 1";
    $select_password_stmt=$pdo->prepare($select_password);
    $select_password_stmt->bindParam(1,$_SESSION['user_email']);
    $select_password_stmt->execute();
    if($select_password_stmt->rowCount()>0){

        if($new_password === $confirm_password){

           $row=$select_password_stmt->fetch(PDO::FETCH_ASSOC);
                $hashed_password=$row['password'];
           

               if(password_verify($current_password,$hashed_password)){
                if($current_password !== $new_password){
               
                $hashed_new_password=password_hash($new_password,PASSWORD_DEFAULT);
             
                  
                $update_password="UPDATE `users` SET password=? WHERE email=? LIMIT 1";
                $update_password_stmt=$pdo->prepare($update_password);
                $update_password_stmt->bindParam(1,$hashed_new_password);
                $update_password_stmt->bindParam(2,$_SESSION['user_email']);
                $update_password_stmt->execute();

                if($update_password){
                    $messagedonep[]= "Your password updated";
                }
            }else{
                
                $messageerrorp[]="Can't use old password";
            }
        }else{
        

            $messageerrorp[]="Wrong current password";
        }
            }else{
     
          
                $messageerrorp[]="Password does not match";
            
            }
        }else {
            $messageerrorp[]= "Password does not match";
        }
        
    
        }

  


?>