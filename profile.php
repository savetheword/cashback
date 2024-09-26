<?php
session_start();
include 'connection.php';
include 'password-change.php';
include 'profile_request.php';
$user_id=$_SESSION['user_id'];
if(!isset($user_id)){
	header('location:https://www.cashbring.shop/');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proile</title>
    <link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>

.search::placeholder {
	color: #b9b4c7 !important;
	
}
	.search{
	display: none;
}


/* Styles for the search button */
.search-btn {
    display: none; /* Ensure button is always visible */

}

.user-btn{
		display: none;

	}
	


    /* Style for the search button */
    .search-btn-mobile {

    width: 40px;
    height: 40px;
    color: #1e1e27;
    cursor: pointer;
    -webkit-transition: color 0.3s ease;
    -moz-transition: color 0.3s ease;
    -ms-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
    border: none;
    background-color: white;
    }

    /* Adjust button position */

	@media screen and (max-width: 1178px) {
	.navbar_user {
   margin-left: -21px;;

  }
}
/* Media query to show search input on larger screens */
@media only screen and (min-width: 768px) {
    .search {
        display: inline-block; /* Show search input on larger screens */
        width: auto; /* Adjust width as needed */
		border: 1px solid grey;
    border-radius: 12px;
    }
    .search-btn {
        display: inline-block; /* Show search input on larger screens */
        width: auto; /* Adjust width as needed */
    }
	.user-btn{
		display: inline-block; /* Show search input on larger screens */
        width: auto; /* Adjust width as needed */

	}

}

</style>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	
	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Leading cashback platform all over world service available</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								
								<li class="account">
									<a href="javacript:void(null)">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
							
									
								
								
									<ul class="account_selection" style="width: 18rem !important">
									<li><a href="javacript:void(null)"><i aria-hidden="true"></i><?php echo $_SESSION['user_name'] ?></a></li>
									<li><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a></li>
								</ul>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

    <div class="main_nav_container" style="position: relative;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="home">cash<span>bring</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="home">home</a></li>
								<li><a href="How_its _works">how its works</a></li>
								<li><a href="about-cashbring">about cashbring</a></li>
								<li><a href="categories">Shop</a></li>
								<li><a href="contact">Contact</a></li>
							</ul>
							<ul class="navbar_user">
								
						<form action="search_page" method="post" >
                              <input  class="search" id="search" type="search" name="search" placeholder="Search..."   required/>
								<li><button name="submit" style="border: none; margin-left:1rem" ><i  class="fa fa-search search-btn" aria-hidden="true"></i></button></li>
								<li><a href="profile"><i class="fa fa-user user-btn" aria-hidden="true"></i></a></li>
								</form>
							
							
								
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>


	</header>


	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
		
		
			<form action="search_page" method="post"  >
				<div style="    display: flex;
    align-content: space-between;
    justify-content: flex-end;
    align-items: flex-start;
    flex-direction: row;">
                              <input  style="    border: 1px solid grey;
    border-radius: 12px;" id="search" type="search" name="search" placeholder="Search..."   required/>
								<li><button name="submit" class="search-btn-mobile"><i class="fa fa-search search-btn-mobile" aria-hidden="true"></i></button></li>
						
								</form>
								</div>
					
		
		
				<li class="menu_item has-children">
					<a href="javacript:void(null)">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
					<form action="search_page" method="post" >
                            
								<li><a style="color: black" href="profile"><i class="fa fa-user " aria-hidden="true"></i></a></li>
								</form>
					</ul>
				</li>
				<li class="menu_item"><a href="home">home</a></li>
				<li class="menu_item"><a href="How_its _works">How its works</a></li>
				<li class="menu_item"><a href="about-cashbring">About cashbring</a></li>
				<li class="menu_item"><a href="categories">Shop</a></li>
				<li class="menu_item"><a href="contact">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->
  <section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">""</h2>
      
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12 col-lg-4 col-xl-3">
        <div class="row gy-4">
          <div class="col-12">
            <div class="card widget-card border-light shadow-sm">
              <div class="card-header text-white" style="background-color: #1e1e27;">Welcome, <?php echo $_SESSION['user_name'] ?></div>
              <div class="card-body">
           
                <h5 class="text-center mb-1"><?php echo $_SESSION['user_name'] ?></h5>
             
           
               
              </div>
            </div>
          </div>
       
      
        
        </div>
      </div>
      <div class="col-12 col-lg-8 col-xl-9">
        <div class="card widget-card border-light shadow-sm">
          <div class="card-body p-4">
            <ul class="nav nav-tabs" id="profileTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" style="color:black!important;" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
              </li>
           
              <li class="nav-item  " role="presentation">
                <button class="nav-link activeTab   "  style="color:black!important;" id="email-tab" data-bs-toggle="tab" data-bs-target="#email-tab-pane" type="button" role="tab" aria-controls="email-tab-pane" aria-selected="false">History</button>
              </li>
              <li class="nav-item " role="presentation">
                <button class="nav-link activeTab" style="color:black!important;"  id="request-tab" data-bs-toggle="tab" data-bs-target="#request-tab-pane" type="button" role="tab" aria-controls="request-tab-pane" aria-selected="false">Request Payment</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link activeTab" style="color:black!important;"  id="password-tab" data-bs-toggle="tab" data-bs-target="#password-tab-pane" type="button" role="tab" aria-controls="password-tab-pane" aria-selected="false">Password</button>
              </li>
            </ul>

            <div class="tab-content pt-4" id="profileTabContent">
              <div class="tab-pane fade active show " id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                
                <div class="row g-0">
                  <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                    <div class="p-2">Name</div>
                  </div>
                  <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2"><?php echo $_SESSION['user_name'] ?></div>
                  </div> 
                  <?php 
                  ?> 
                  <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                    <div class="p-2">Balance</div>
                  </div>
                  <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">$122</div>
                  </div>
                  <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                    <div class="p-2">Pending</div>
                  </div>
                  <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">$100</div>
                  </div>
                  <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                    <div class="p-2">Total earned</div>
                  </div>
                  <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2">$1</div>
                  </div>

                  <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                    <div class="p-2">Email</div>
                  </div>
                  <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                    <div class="p-2"><?php echo $_SESSION['user_email'] ?></div>
                  </div>
            
                </div>
                <div class="row">
                    <div class="col-12">
                      <a href="logout"  class="btn btn-primary mt-4" style="background-color: #fe4c50!important;border:none">Logout</a>
                    </div>
                  </div>
              </div>
            
              <div class="tab-pane fade" id="email-tab-pane" role="tabpanel" aria-labelledby="email-tab" tabindex="0">
                <form action="#!">
                  <fieldset class="row gy-3 gy-md-0">
                
                    <div class="col-12 col-md-9 col-xl-10">
                    <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Payment ID</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Notification Item -->
                <tr>
                    <td>John Doe</td>
                    <td>ABC123</td>
                    <td>Credit Card</td>
                    <td>$1</td>
                    <td>April 23, 2024</td>

                </tr>
                <!-- Add more notification items here as needed -->
            </tbody>
        </table>
                    </div>
                  </fieldset>
             
                </form>
              </div>
              <div class="tab-pane fade activeTab" id="request-tab-pane" role="tabpanel" aria-labelledby="request-tab" tabindex="0">
 

                <form action="" method="post" id="myForm" data-active-link>
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

                  <div class="row gy-3 gy-xxl-4">

                    <div class="col-12">
                      <label for="currentPassword" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="currentPassword">
                    </div>
                    <div class="col-12">
                      <label for="newPassword" class="form-label">Enter your gmail id:</label>
                      <input type="text" name="email" class="form-control "  id="newPassword" placeholder="enter your gmail id that registerd with cashbring">
                    </div>
                    <div class="col-12">
                      <label for="confirmPassword" class="form-label">Enter payment method</label>
                      <input type="text" name="payment_method" class="form-control" id="confirmPassword">
                    </div>
                
                    <div class="col-12">
                      <label for="confirmPassword" class="form-label">Enter your payment id</label>
                      <input type="text" name="payment_id" class="form-control" id="confirmPassword">
                    </div>
                    <div class="col-12">
                      <label for="confirmPassword" class="form-label">Enter payment amount you want withdraw</label>
                      <input type="number" name="payment_amount" class="form-control" id="confirmPassword">
                    </div>
                    <div class="col-12">
                  
                      <input type="hidden" id="payment_date" class="form-control" name="date">
                    </div>
                    <div class="col-12">
                      <button type="submit" name="submit" id="submit" class="btn btn-primary" style="border: none; background-color:#fe4c50">Request payment</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade activeTab" id="password-tab-pane" role="tabpanel" aria-labelledby="password-tab" tabindex="0">
                <form action="" method="post" data-active-link>
                <?php

if(isset($messageerrorp)){
  foreach( $messageerrorp as  $messageerrorp){
      echo '
      <div class="message">
      <div class="alert alert-danger" role="alert">
         <span>'. $messageerrorp.'</span>
         <i style="cursor:pointer" class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
       
      </div>
      ';
   }
}else if(isset($messagedonep)){
  foreach($messagedonep as $messagedonep){
    echo '
    <div class="message">
    <div class="alert alert-success" role="alert">
    <span>'.$messagedonep.'</span>
    <i style="cursor:pointer" class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>
    </div>
    ';
  }
}

?>

                  <div class="row gy-3 gy-xxl-4">
                     <div class="col-12">
                      <label for="currentPassword" class="form-label"  >Current Password</label>
                      <input type="password" class="form-control" name="current-password" id="currentPassword">
                    </div>
                    <div class="col-12">
                      <label for="newPassword" class="form-label">New Password</label>
                      <input type="password" class="form-control" name="new-password" id="newPassword">
                    </div>
                    <div class="col-12">
                      <label for="confirmPassword" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" name="confirm-password" id="confirmPassword">
                    </div>
                    <div class="col-12">
                      <button type="submit" name="change-password" class="btn btn-primary" style="background: #fe4c50 !important; border:none">Change Password</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

	<!-- Banner -->


	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>All over world service</h6>
							<p>services available all over world</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>100% guranted cashback </h6>
							<p>You will get guranted cashback</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Earn extra money</h6>
							<p>Shop and earm money </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
              <p>8AM - 12am</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get latest offers</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="newsletter_success.php" method="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" name="email" class="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" name="newsletter_submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</section>
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="terms-and-conditions">Terms & conditions</a></li>
							<li><a href="privacy-policy">Privacy policy</a></li>
							<li><a href="contact">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
						<li><a style="cursor: none;" href="javascript:void(null)">Realaible and trustable platform since 2024</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">Cashbring©2024 All Rights Reserverd.</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<script>
var paymentDate = document.getElementById('payment_date');
var button = document.getElementById('submit');

button.addEventListener('click', function(event) {
    var date = new Date(); // Get the current date and time in local timezone
    var year = date.getFullYear();
    var month = String(date.getMonth() + 1).padStart(2, '0'); // Add leading zero if month is single digit
    var day = String(date.getDate()).padStart(2, '0'); // Add leading zero if day is single digit
    var hours = String(date.getHours()).padStart(2, '0'); // Add leading zero if hours is single digit
    var minutes = String(date.getMinutes()).padStart(2, '0'); // Add leading zero if minutes is single digit
    var seconds = String(date.getSeconds()).padStart(2, '0'); // Add leading zero if seconds is single digit
    
    var payment_date_formatted = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    paymentDate.value = payment_date_formatted;
});

</script>








  <script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>

<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
