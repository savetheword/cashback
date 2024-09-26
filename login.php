<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
 $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
 $SelectStmt=$pdo->prepare("SELECT * from `users` WHERE email=?");
 $SelectStmt->bindParam(1,$email);
 $SelectStmt->execute();
 $SelectUsers=$SelectStmt->rowCount();
 $row = $SelectStmt->fetch(PDO::FETCH_ASSOC);
 if($SelectUsers>0 && password_verify($password,$row['password'])){

  $_SESSION['user_name']=$row['name'];
  $_SESSION['user_email']=$row['email'];
  $_SESSION['user_id']=$row['id'];
  $messagedone[]='logged successfully';
  header('Location:home');

}else{
  $messageerror[]='Incorrect email or password';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <style>
    .custom-color-fr{
      color: #fe4c50;
    }
    .custom-color-fr:hover{
      color:  red;
    }
    .custom-color-login{
      background-color: #fe4c50;
    }
    .custom-color-kogin:hover{
      background-color:  red;
    }

    .custom-color-ya{
      color: #fe4c50;
    }
    .custom-color-ya:hover{
      color:  red;
    }
    .form-control:focus {
    border-color: red !important; /* Change to your desired color */
    box-shadow: 0 0 0 0.25rem rgba(red) !important; /* Optional: Add a shadow effect */
}
  </style>
</head>
<body>


<div class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
  <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
    <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">Login To Your Account</div>
    <button class="relative mt-6 border rounded-md py-2 text-sm text-gray-800 bg-gray-100 hover:bg-gray-200">
      <span class="absolute left-0 top-0 flex items-center justify-center h-full w-10 text-blue-500"><i class="fa-brands fa-google"></i></span>
      <span>Login with google(coming soon)</span>
    </button>
    <div class="relative mt-10 h-px bg-gray-300">
      <div class="absolute left-0 top-0 flex justify-center w-full -mt-2">
        <span class="bg-white px-4 text-xs text-gray-500 uppercase">Or Login With Email</span>
      </div>
    </div>
   
    <div class="mt-10">
      <form action="#" method="post">
        <div class="flex flex-col mb-6">
        <?php
      if(isset($messageerror)){
        foreach($messageerror as $messageerror){
            echo '
            <div class="message">
            <div class="alert alert-danger" role="alert">
               <span>'.$messageerror.'</span>
               <i style="cursor:pointer" class="fas fa-times" onclick="this.parentElement.remove();"></i>
               </div>
             
            </div>
            ';
         }
      }else if(isset($messagedone)){
        foreach($messagedone as $messagedone){
          echo '
          <div class="message">
          <div class="alert alert-success" role="alert">
          <span>'.$messagedone.'</span>
          <i style="cursor:pointer" class="fas fa-times" onclick="this.parentElement.remove();"></i>
          </div>
          </div>
          ';
        }
      }
          ?>
          <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">E-Mail Address:</label>
          <div class="relative">
            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
              <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </div>

            <input id="email" type="email" name="email" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-red-400" placeholder="E-Mail Address" />
          </div>
        </div>
        <div class="flex flex-col mb-6">
          <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Password:</label>
          <div class="relative">
            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
              <span>
                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </span>
            </div>

            <input id="password" type="password" name="password" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-red-400" placeholder="Password" />
          </div>
        </div>

        <div class="flex items-center mb-6 -mt-4">
          <div class="flex ml-auto">
            <a href="password-reset" class="inline-flex text-xs sm:text-sm custom-color-fr" >Forgot Your Password?</a>
          </div>
        </div>

        <div class="flex w-full">
          <button type="submit" name="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base  rounded py-2 w-full transition duration-150 ease-in custom-color-login">
            <span class="mr-2 uppercase">Login</span>
            <span>
              <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>
    <div class="flex justify-center items-center mt-6">
      <a href="sign-in"  class="inline-flex items-center font-bold  text-xs text-center custom-color-ya">
        <span>
          <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
          </svg>
        </span>
        <span class="ml-2 ">You don't have an account?</span>
      </a>
    </div>
  </div>
</div>
  <script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>
</body>
</html>