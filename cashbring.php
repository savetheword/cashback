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
<title>Cashbring</title>
<link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Cashbring home">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


<style>

.content{
	display: none;
}

.search::placeholder {
	color: #b9b4c7 !important;
	
}	

    /* background: red; */

/* Hide search input by default on mobile */
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

.banner .row{
	margin-left: 0 !important;
}
.pointer-cursor-debit-credit{
	cursor: pointer;
}

.new_arrivals .row{
	margin-left: 0 !important;
}
.new_arrivals .col, .col-6 , col-12{
	padding-left: 0 !important;
	padding-right: 0 !important;
}
.details-product, image{
	cursor: pointer;
}
/* loading */
.loader_wrapper {
  display: none;
  place-content: center;
  height: 100vh;
  background: white;
}

.btn-loading {
  background-color: black;
  border: none;
  color: white;
  padding: 1rem 1rem;
  font-size: 3rem;
  border-radius: 100px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition:  transform 0.2s;
}





.button-loader {
  display: flex;
  gap: .3rem;
}
.button-loader > div {
  width: .1rem;
  height: .1rem;
  background-color: white;
  border-radius: 10%;
  animation: 1.2s infinite ease-in-out load;
}


.btn-loading{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 1rem;
}

.product-custom-class{
	gap: 2rem;
	justify-content: center;
}


</style>
</head>

<body>

<div class="loader_wrapper">
	<p style="    text-align: center;
    font-size: 2rem;
    ;" >Underdevelopment</p>
	<h1>Read before accesing our website</h1>
	<p>Welcome to our cashback business platform! Our company is in the development stage, and we are eagerly awaiting affiliate partnerships from other companies. Our team is ready to collaborate. If you are interested in affiliating with us, please contact us at cashbringofficial@gmail.com or via phone at +919778544394.

While our backend functions, such as contact and other services, are up and running smoothly, we are currently finalizing partnerships with various affiliate programs, including Flipkart, Amazon, Mythra, and others. These partnerships will enable us to provide real-time tracking of your purchases and ensure you receive the best cashback deals.

As we await these collaborations, some profile information and product listings may serve as placeholders. Rest assured, we are actively working behind the scenes to enhance your experience. Thank you for your patience and understanding as we strive to provide you with an exceptional cashback experience.</p>
  <button class="btn-loading " style="font-size:small;cursor:pointer">
    Continue
    <div></div>
    <div></div>
    <div></div>
    </div>

  </button>
</div>
<div class="super_container content" >

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
							
									
								
									<ul class="account_selection">
										<li><a href="javascript:void(null)"><i aria-hidden="true"></i><?php echo $_SESSION['user_name'] ?></a></li>
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
							<a href="home">cash<span>Bring</span></a>
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
                              <input  class="search" id="search" type="search" name="search" placeholder="Search..." required/>
								<li><button name="submit" ><i class="fa fa-search search-btn" aria-hidden="true"></i></button></li>
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
                              <input id="search" style="    border: 1px solid grey;
    border-radius: 12px;" type="search" name="search" placeholder="Search..."   required/>
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
				<li class="menu_item"><a href="https://www.cashbring.shop/home">home</a></li>
				<li class="menu_item"><a href="How_its _works">How its works</a></li>
				<li class="menu_item"><a href="about-cashbring">About cashbring</a></li>
				<li class="menu_item"><a href="categories">Shop</a></li>
				<li class="menu_item"><a href="contact">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/hero.webp)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Earn more cash </h6>
						<h1>Get up to 50% cashback</h1>
						<div class="red_button shop_now_button"><a href="categories">Shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner  ">
		<div class="container">
			<div class="row ">
			<?php
				$OffersFound=false;
			
			$SelectProdcuts="SELECT * FROM `products` WHERE `category` = 'offers' LIMIT 3";
			$stmt=$pdo->prepare($SelectProdcuts);
			$stmt->execute();
		
			if($stmt->rowCount()>0){
				
           while($Products=$stmt->fetch(PDO::FETCH_ASSOC)){
			if($Products['category'] === 'offers' ){
				$OffersFound=true;

			

		   

		
?>
				<div class="col-md-4 details-product">
					
					<div class="banner_item align-items-center image "  data-product-id=<?php echo $Products['product_id'] ?> style="background-image:url(admin-page/image-folder/<?php echo $Products['product_image'] ?>)  ">
						<div class="banner_category">
							<a href="javascript:void(0)" class="title" data-product-id=<?php echo $Products['product_id'] ?>><?php echo $Products['title']  ?> </a>
						</div>
					</div>
				</div>
				
			

	
<?php

			}
		
		} 

	
	if (!$OffersFound) {
		?>


            
	<div class="col-md-12">
		<p class="text-center">No offers available at the moment. Check back later!</p>
	</div>



<?php
	}
		
	}else{
		
echo '<div class="col-md-12">';
echo '<p class="text-center">No offers available at the moment. Check back later!</p>';
echo '</div>';


	
	}
?>

	</div>
		</div>
	</div>
	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Top Categorys</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center custom-mr">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row   ">
				<div class=" col  col-md-12 col-lg-12 ">
					<div class="product-grid   " data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
<?php
$hasProducts = false;
$category = ['men', 'women', 'accessories'];

foreach($category as $cat){
	
	
	
$GetProdcut="SELECT * FROM `products` WHERE category =?";
$stmt=$pdo->prepare($GetProdcut);
$stmt->bindValue(1,$cat);

$stmt->execute();
if(empty($category)){
	
	echo '<div class="col-md-12">';
	echo '<p class="text-center">No Products available at the moment. Check back later!</p>';
	echo '</div>';

	
}

if($stmt->rowCount()>0){
	
	$hasProducts = true;
while($fethcProducts=$stmt->fetch(PDO::FETCH_ASSOC)){
	


	

?>
						<!-- Product 1 -->

						<div class="product-item details-product   col-6    <?php echo isset($fethcProducts['category'] )? $fethcProducts['category'] : 'nothing'  ?>">
							<div class="product discount product_filter ">
								<div class="product_image">
									<img src="admin-page/image-folder/<?php echo $fethcProducts['product_image']?>" class="image" data-product-id="<?php echo $fethcProducts['product_id'] ?>"  alt="">
								</div>
							
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo $fethcProducts['discount_precentage'] ?></span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="javascript:void(0)" class="title"  data-product-id="<?php echo $fethcProducts['product_id'] ?>"><?php echo $fethcProducts['title'] ?></a></h6>
									<div class="product_price"><?php echo isset($fethcProducts['discount_price']) ? $fethcProducts['discount_price'] :''  ?><span><?php echo $fethcProducts['price']  ?></span></div>
								</div>
								
							</div>
							<div class="red_button add_to_cart_button "><a href="javascript:void(0)" class="button-custom"  data-product-id="<?php echo $fethcProducts['product_id'] ?>">claim</a></div>
	
						</div>

						

						<?php
					
}

}


}

				?>
					
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row  align-items-center" >
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/banner_deal_of_the_week.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="" class="timer_num">0</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="" class="timer_num">0</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="" class="timer_num">0</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="" class="timer_num">0</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="categories">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Credit cards & Debit cards</h2>
					</div>
				</div>
			</div>
	<div class="banner ">

		<div class="container details-product">
			
			<div class="row product-custom-class">
				<?php
				$cd='Debit cards and credit cards';
				$GetCd="SELECT * FROM `products` WHERE category =? LIMIT 3";
				$Getstmt=$pdo->prepare($GetCd);
				$Getstmt->bindParam(1,$cd);
				$Getstmt->execute();
				$GetRow=$Getstmt->rowCount();
				if($GetRow > 0){ 
					while($FetchCd=$Getstmt->fetch(PDO::FETCH_ASSOC)){
				?>
				<div class="col-6  col-md-3  ">
					<div class="pointer-cursor-debit-credit banner_item align-items-center image"  data-product-id="<?php echo $FetchCd['product_id'] ?>" style="background-image:url(admin-page/image-folder/<?php echo $FetchCd['product_image'] ?>)">
					
					</div>
				</div>
		<?php
		
				}
				}else{
					echo '<div class="col-md-12">';
	echo '<p class="text-center">No Products available at the moment. Check back later!</p>';
	echo '</div>';
				}
		?>
			</div>
		</div>
	</div>
	<!-- Best Sellers -->



	<div class="best_sellers details-product">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
		
			<div class="row" >
				<div class="col   " >
					<div class="product_slider_container" >
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
							<?php
							$bestSeller='Best sellers';
							$BrQuery="SELECT * FROM `products` WHERE category=?";
							$BrStmt=$pdo->prepare($BrQuery);
							$BrStmt->bindParam(1,$bestSeller);
							$BrStmt->execute();
							$BrRow=$BrStmt->rowCount();
							if($BrRow > 0){
								
								while($BrResult=$BrStmt->fetch(PDO::FETCH_ASSOC)){
								
							

							
							?>
							<div class="owl-item product_slider_item  " >
								<div class="product-item ">
									<div class="product discount ">
										<div class="product_image">
											<img class="image" src="admin-page/image-folder/<?php echo $BrResult['product_image'] ?>"  data-product-id="<?php echo $BrResult['product_id'] ?>" alt="">
										</div>
									
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo $BrResult['discount_precentage'] ?></span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="javascript:void(null)" class="title" data-product-id="<?php echo $BrResult['product_id'] ?>"><?php echo $BrResult['title'] ?></a></h6>
											<div class="product_price"><?php echo $BrResult['discount_price'] ?><span><?php echo $BrResult['price']?></span></div>
										</div>
										<div class="red_button add_to_cart_button "><a href="javascript:void(0)" class="button-custom"  data-product-id="<?php echo $BrResult['product_id'] ?>">claim</a></div>
									</div>
									
								</div>
								
							</div>

							<?php
}
}else{
	echo '<div class="">';
	echo '<p class="text-center">No Products available at the moment. Check back later!</p>';
	echo '</div>';
}

?>
						</div>
			
						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column slider_area_this" >
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
					<form action="newsletter_success"  method="post">
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
						<li><a style="cursor: none;" href="javascript:void(none)">Realaible and trustable platform since 2024</a></li>
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

document.addEventListener('DOMContentLoaded', function() {
    var loaderShown = localStorage.getItem('loaderShown');


    if (!loaderShown) {

		document.querySelector('.loader_wrapper').style.display = 'grid';
		localStorage.setItem('loaderShown', 'true');

	} else {
        // Hide the loader and display the home page content
        document.querySelector('.loader_wrapper').style.display = 'none';
        document.querySelector('.content').style.display = 'block';
    
    }
    document.querySelector('.btn-loading').addEventListener('click', function() {
        document.querySelector('.loader_wrapper').style.display = 'none';
        document.querySelector('.content').style.display = 'block';
    });
});


</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="product-page.js"></script>
<script src="js/product-page.js" ></script>
<script src="js/jquery.min.js"></script>
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
