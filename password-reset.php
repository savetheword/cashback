<?php
include 'connection.php';
include 'password-reset-page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password reset</title>
  <link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
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
  </style>
</head>
<body>

<div class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
  <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
    <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">Reset your password</div>
 
 
    <div class="mt-10">
      <form action="" method="post">
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
        <div class="flex flex-col mb-6">
          <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">E-Mail Address:</label>
          <div class="relative">
            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
              <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </div>

            <input id="email" type="email" name="email" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="E-Mail Address" />
          </div>
        </div>



        <div class="flex w-full">
          <button type="submit" name="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base  rounded py-2 w-full transition duration-150 ease-in custom-color-login">
            <span class="mr-2 uppercase">Reset password</span>
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
      <a href="login"  class="inline-flex items-center font-bold  text-xs text-center custom-color-ya">
        <span>
   
        </span>
        <span class="ml-2 ">Go back</span>
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