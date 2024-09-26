<?php
session_start();
include 'connection.php';
$user_id=$_SESSION['user_id'];
if(!isset($user_id)){
	header('location:https://www.cashbring.shop/');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pivacy policy</title>
<link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Pivacy policy">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">

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
.privacy-policy{
    margin-top: 7rem;
}
@media only screen and (min-width: 990px) {
  .privacy-policy{
    margin-top: 13rem;
}
    
}
.pointer-cursor-debit-credit{
	cursor: pointer;
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
							
									
								
									<ul class="account_selection" style="width: 18rem !important;">
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
								<li><a href="about-cashbring">about casbring</a></li>
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
				<li class="menu_item"><a href="index">home</a></li>
				<li class="menu_item"><a href="How_its _works">How its works</a></li>
				<li class="menu_item"><a href="about-cashbring">About cashbring</a></li>
				<li class="menu_item"><a href="single-page">Shop</a></li>
				<li class="menu_item"><a href="contact">contact</a></li>
			</ul>
		</div>
	</div>
    <div class="container privacy-policy">
  <h1 class="text-center text-danger mb-4">Privacy Policy</h1>
  
  <p>We are committed to protecting your privacy. This privacy policy outlines how your personal information is collected, used, and protected when you visit our website or use our services.</p>
  
  <h2>Information We Collect</h2>
  <p>We collect personal information such as your name, email address, and payment information when you sign up for an account or make purchases through our platform.</p>
  
  <h2>How We Use Your Information</h2>
  <p>We use your personal information to provide and improve our services, communicate with you, process transactions, and comply with legal obligations.</p>
  
  <h2>Information Sharing</h2>
  <p>We may share your personal information with third-party service providers who assist us in operating our website and providing our services.</p>
  
  <h2>Security</h2>
  <p>We take appropriate measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.</p>
  
  <h2>Changes to This Policy</h2>
  <p>We may update this privacy policy from time to time. Any changes will be posted on this page.</p>
  
  <h2>Contact Us</h2>
  <p>If you have any questions about our privacy policy, please contact us at <a href="mailto:cashbringofficial@gmail.com">cashbringofficial@gmail.com</a>.</p>
</div>


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
							<p>9AM - 12am</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




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

</div>
  <script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>

</html>
