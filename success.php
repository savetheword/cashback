<?php

include 'newsletter_success.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission success</title>
    <link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/error-404s/error-404-1/assets/css/error-404-1.css">
      
</head>
<body>
<section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
          <span class="display-1 fw-bold">4</span>
          <span class="display-1 fw-bold">0</span>
            <span class="display-1 fw-bold ">2</span>
          </h2>
          <h3 class="h2 mb-2">Oops! You're submission failed.</h3>
          <?php

    if(isset($_SESSION['done'])){
        foreach($_SESSION['done'] as $done){
            

            echo '<p class="mb-5">'.$done.'</p>';
        }
    }else{
      echo '<script>window.location = "404";</script>';
    }
 

?>
           <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="home" role="button">Back to Home</a>  
         
        </div>
      </div>
    </div>
  </div>
</section>


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
