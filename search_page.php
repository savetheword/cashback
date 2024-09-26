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
<title>Search</title>
<link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Cashbring search">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<style>
@media screen and (max-width: 1178px) {
	.navbar_user {
   margin-left: -21px;;

  }
}
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
<body>
<?php
$search=$_POST['search'];
echo $search;
?>
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
							<li><a href="about-cashbring">about CASHBRING</a></li>
							<li><a href="categories">Shop</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
						<ul class="navbar_user">
							
					<form action="search_page" method="post" >
						  <input   class="search" id="search" type="search" name="search" placeholder="Search..."   required/>
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
						
							<li><a  href="profile"><i class="fa fa-user " aria-hidden="true"></i></a></li>
							</form>
				</ul>
			</li>
			<li class="menu_item"><a href="index">home</a></li>
			<li class="menu_item"><a href="How_its _works">How its works</a></li>
			<li class="menu_item"><a href="about-cashbring">About cashbring</a></li>
			<li class="menu_item"><a href="categories">Shop</a></li>
			<li class="menu_item"><a href="contact">contact</a></li>
		</ul>
	</div>
</div>
	<!-- Slider -->


	<!-- Banner -->

	<!-- Best Sellers -->

		
	<div class="best_sellers">
		<div class="container">
		<div class="row" >

		<div class=" new_arrivals_title">
			<h2></h2>
</div>
</div>
			<div class="row" >


			<div class="col">
			<div class="section_title new_arrivals_title">
			<h2>Search result</h2>
</div>
					<div class="product_slider_container" >
						<div class="owl-carousel owl-theme product_slider">
						<?php					
	if(isset($_POST['submit'])){
		$Search=$_POST['search'];
	
		$SearchQuery=$pdo->prepare("SELECT * FROM `products` WHERE title LIKE '%$search%'");
		$SearchQuery->execute();
		
		$SearchCount=$SearchQuery->rowCount();

		if($SearchCount>0 ){
			while($searchResult=$SearchQuery->fetch(PDO::FETCH_ASSOC)){
			

	
	?>

		<!-- Slide 1 -->
	
	
							<div class="owl-item product_slider_item"  >



								<div class="product-item" >

								<div class="product discount details-product">
										<div class="product_image">
										<img class="image" src="admin-page/image-folder/<?php echo $searchResult['product_image'] ?>"  data-product-id="<?php echo $searchResult['product_id'] ?>" alt="">
										</div>
										
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo $searchResult['discount_precentage'] ?></span></div>


										<div class="product_info">
											<h6 class="product_name"><a class="title" data-product-id="<?php echo $searchResult['product_id'] ?>" href="javascript:void(null)"><?php echo $searchResult['title'] ?></a></h6>
											<div class="product_price"><?php echo ($searchResult['category'] !== 'offers' && $searchResult['category'] !== 'dcf') ? $searchResult['discount_price'] : $searchResult['description'];  ?> <span><?php echo ($searchResult['category'] !== 'offers') ? $searchResult['discount_price'] : "" ?></span></div>
										</div>
									</div>
									
									
								</div>
	
							</div>
							<?php
	}
		}else{
			
echo '<div class="product_slider_container">';
echo '<p class="text-center ">No result found to showcase !</p>';
echo '</div>';


		}
	}else{
		echo '<script>window.location = "404";</script>';
	}
?>
	
		</div>
						
						
			<!-- Slider Navigation -->

						<div  class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column" >
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
	

			</div>

	
				</div>

			</div>
			
		</div>
		
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
						<li><a style="cursor: none;" href="">Realaible and trustable platform since 2024</a></li>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="js/product-page.js"></script>
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
