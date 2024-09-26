<?php
session_start();
include 'connection.php';

if (isset($_SESSION['user_id'])) {
    header('Location: https://www.cashbring.shop/home');
    exit();
} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashbring</title>
    <link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<?php
include "connection.php";
?>

<body>
    <!-- component -->
<script src="//unpkg.com/alpinejs" defer></script>

<main>
    <section class="bg-white dark:bg-gray-900">
    <nav x-data="{ isOpen: false }" class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
        <div class="logo_container">
        <?php

?>
							<a href="#">cash<span>Bring</span></a>
						</div>

        <!-- Mobile menu button -->
        <div class="flex flex-col  lg:hidden" style="margin: auto;" >
            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none " aria-label="toggle menu">
            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
            </svg>

            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out  lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none ">
        <div class="lg:-px-8 flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-gray-400 lg:mx-8" href="#home">Home</a>
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-gray-400  lg:mx-8" href="#how">How its works</a>
            
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-gray-400  lg:mx-8" href="#faq">Faq</a>
        </div>

        <a class="mt-4 block rounded-lg  px-6 py-2.5 text-center font-medium capitalize leading-5 text-white lg:mt-0 lg:w-auto" href="login"  style="background-color: #fe4c50;"> Login </a>

        <a class="mt-4 block rounded-lg  px-6 py-2.5 text-center font-medium capitalize leading-5 text-white  lg:mt-0 lg:w-auto" href="sign-in" style="margin-left: 1rem; background-color:#fe4c50"> Sign in </a>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-16 text-center " id="home">
        <div class="mx-auto max-w-lg">
        <h1 class="text-3xl font-bold text-gray-800 lg:text-4xl">Welcome to world largest cashabck platform</h1>
        <p class="mt-3 text-sm text-gray-400">Did you know?</p>
        <p class="mt-6 text-gray-500 "> We started this paltform to earn while you buying things.</p>
        <a href="sign-in" class="mt-6 rounded-lg px-6 py-2.5 text-center text-sm font-medium capitalize leading-10 text-white hover:bg-['']focus:outline-none lg:mx-0 lg:w-auto" style="background-color: #fe4c50;">Create an account</a>
        <p class="mt-3 text-sm text-gray-400">Buy more earn more</p>
        </div>

        <div class="mt-10 flex justify-center">
        <img class="h-96 w-full rounded-xl object-cover lg:w-4/5" src="images/hero.jpeg" />
        </div>
    </div>
    </section>

 
<!-- component -->
<section class="text-gray-400 bg-white body-font " id="how">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-black mb-20">How its works
      <br class="hidden sm:block">
    </h1>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <div class="p-4 md:w-1/3 flex">

        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 496.158 496.158" xml:space="preserve">
<path style="fill:none;" d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z"/>
<path style="fill:#fe4c50;" d="M278.767,145.419c-3.126-4.003-7.276-6.006-12.451-6.006c-4.591,0-7.716,0.879-9.375,2.637  c-1.662,1.758-5.226,6.445-10.693,14.063c-5.47,7.617-11.744,14.502-18.823,20.654c-7.082,6.152-16.53,12.012-28.345,17.578  c-7.91,3.712-13.429,6.738-16.553,9.082c-3.126,2.344-4.688,6.006-4.688,10.986c0,4.298,1.586,8.082,4.761,11.353  c3.172,3.273,6.812,4.907,10.913,4.907c8.592,0,25.292-9.521,50.098-28.564V335.41c0,7.814,1.806,13.722,5.42,17.725  c3.612,4.003,8.397,6.006,14.355,6.006c13.378,0,20.068-9.814,20.068-29.443V161.972  C283.455,154.941,281.892,149.425,278.767,145.419z"/>
</svg>
        </div>
        <div class="flex-grow pl-6">
          <h2 class="text-black text-lg title-font font-medium mb-2">Select you product</h2>
          <p class="leading-relaxed text-base">Select your favorite product from ecommes websites like flipkart amazon mynthra etc.</p>
         
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 496.158 496.158" xml:space="preserve">
<path style="fill:none;" d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z"/>
<path style="fill:#fe4c50;" d="M319.783,325.595c-4.005-3.124-9.814-4.688-17.432-4.688h-76.465c2.44-3.71,4.834-6.885,7.178-9.521  c5.468-6.64,15.55-15.967,30.249-27.979c14.696-12.012,25.17-20.824,31.421-26.44c6.249-5.614,12.378-13.378,18.384-23.291  c6.006-9.911,9.009-20.922,9.009-33.032c0-7.713-1.442-15.161-4.321-22.339c-2.882-7.178-6.91-13.5-12.085-18.97  c-5.177-5.468-11.183-9.764-18.018-12.891c-10.547-4.688-23.291-7.031-38.232-7.031c-12.403,0-23.218,1.831-32.446,5.493  s-16.846,8.473-22.852,14.429c-6.006,5.958-10.524,12.598-13.55,19.922c-3.028,7.324-4.541,14.355-4.541,21.094  c0,5.566,1.611,9.961,4.834,13.184s7.274,4.834,12.158,4.834c5.566,0,9.789-1.758,12.671-5.273  c2.879-3.516,5.468-8.544,7.764-15.088c2.293-6.542,3.93-10.547,4.907-12.012c7.324-11.229,17.381-16.846,30.176-16.846  c6.054,0,11.646,1.369,16.772,4.102c5.127,2.735,9.178,6.569,12.158,11.499c2.978,4.933,4.468,10.524,4.468,16.772  c0,5.763-1.392,11.646-4.175,17.651s-6.837,11.865-12.158,17.578c-5.324,5.713-11.989,11.403-19.995,17.065  c-4.493,3.028-11.964,9.352-22.412,18.97c-10.451,9.62-22.169,21.167-35.156,34.644c-3.126,3.321-6.006,7.887-8.643,13.696  c-2.637,5.812-3.955,10.474-3.955,13.989c0,5.47,2.051,10.231,6.152,14.282c4.102,4.054,9.814,6.079,17.139,6.079H306.6  c6.445,0,11.254-1.659,14.429-4.98c3.172-3.319,4.761-7.372,4.761-12.158C325.789,332.97,323.786,328.722,319.783,325.595z"/>
      </svg>

        </div>
        <div class="flex-grow pl-6">
          <h2 class="text-black text-lg title-font font-medium mb-2">Claim your cashback</h2>
          <p class="leading-relaxed text-base">Claim your cashback by clicking that product.</p>
      
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex">
      <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 496.158 496.158" xml:space="preserve">
<path style="fill:none;" d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z"/>
<path style="fill:#fe4c50;" d="M319.637,269.711c-2.637-6.395-6.569-12.231-11.792-17.505c-5.226-5.273-11.646-9.961-19.263-14.063  c7.91-6.64,13.989-13.451,18.237-20.435c4.248-6.981,6.372-15.355,6.372-25.122c0-7.42-1.465-14.355-4.395-20.801  s-7.276-12.108-13.037-16.992c-5.763-4.882-12.55-8.617-20.361-11.206c-7.814-2.586-16.457-3.882-25.928-3.882  c-10.84,0-20.654,1.538-29.443,4.614s-16.139,7.155-22.046,12.231c-5.91,5.079-10.4,10.426-13.477,16.04  c-3.076,5.617-4.614,10.963-4.614,16.04c0,5.273,1.634,9.499,4.907,12.671c3.271,3.175,6.859,4.761,10.767,4.761  c3.319,0,6.249-0.586,8.789-1.758c2.538-1.172,4.296-2.783,5.273-4.834c1.659-3.809,3.49-7.86,5.493-12.158  c2-4.296,4.125-7.812,6.372-10.547c2.245-2.733,5.296-4.93,9.155-6.592c3.856-1.659,8.764-2.49,14.722-2.49  c8.789,0,15.77,2.71,20.947,8.13c5.175,5.42,7.764,11.891,7.764,19.409c0,9.865-3.248,17.432-9.741,22.705  c-6.496,5.273-14.234,7.91-23.218,7.91h-6.006c-6.935,0-12.158,1.442-15.674,4.321c-3.516,2.882-5.273,6.665-5.273,11.353  c0,4.786,1.465,8.521,4.395,11.206c2.93,2.687,7.079,4.028,12.451,4.028c1.172,0,3.809-0.194,7.91-0.586  c4.102-0.389,7.127-0.586,9.082-0.586c11.133,0,19.823,3.248,26.074,9.741c6.249,6.496,9.375,15.454,9.375,26.88  c0,7.716-1.831,14.502-5.493,20.361s-8.302,10.279-13.916,13.257c-5.617,2.98-11.451,4.468-17.505,4.468  c-10.547,0-18.727-3.296-24.536-9.888c-5.812-6.592-11.256-16.674-16.333-30.249c-0.783-2.245-2.442-4.175-4.98-5.786  c-2.541-1.611-5.177-2.417-7.91-2.417c-5.47,0-10.034,1.735-13.696,5.2c-3.662,3.468-5.493,8.034-5.493,13.696  c0,4.395,1.538,9.961,4.614,16.699s7.617,13.257,13.623,19.556s13.646,11.549,22.925,15.747c9.276,4.198,19.775,6.299,31.494,6.299  c11.522,0,22.046-1.831,31.567-5.493s17.748-8.739,24.683-15.234c6.933-6.493,12.181-13.891,15.747-22.192  c3.563-8.299,5.347-16.894,5.347-25.781C323.592,283.018,322.273,276.109,319.637,269.711z"/>
</svg>
</div>
        <div class="flex-grow pl-6">
          <h2 class="text-black text-lg title-font font-medium mb-2">Buy that product</h2>
          <p class="leading-relaxed text-base">Once you buy the product you will receive cashback amount in your account.</p>
     
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
   <!-- component -->
<!-- MDI Icons -->


<!-- Page Container -->

 

 
<!-- component -->
<div class="p-8" id="faq">
    <div class="bg-white p-4  py-8 mt-12">
        <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">FAQ</h4>
        <p class="text-center text-gray-600 text-sm mt-2">Here are some of the frequently asked questions</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 xl:gap-12 px-2 xl:px-12 mt-4">
            <div class="flex space-x-8 mt-8">
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h12 w-12 text-blue-600"  version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fe4c50;}
</style>
<g>
	<path class="st0" d="M396.138,85.295c-13.172-25.037-33.795-45.898-59.342-61.03C311.26,9.2,280.435,0.001,246.98,0.001   c-41.238-0.102-75.5,10.642-101.359,25.521c-25.962,14.826-37.156,32.088-37.156,32.088c-4.363,3.786-6.824,9.294-6.721,15.056   c0.118,5.77,2.775,11.186,7.273,14.784l35.933,28.78c7.324,5.864,17.806,5.644,24.875-0.518c0,0,4.414-7.978,18.247-15.88   c13.91-7.85,31.945-14.173,58.908-14.258c23.517-0.051,44.022,8.725,58.016,20.717c6.952,5.941,12.145,12.594,15.328,18.68   c3.208,6.136,4.379,11.5,4.363,15.574c-0.068,13.766-2.742,22.77-6.603,30.442c-2.945,5.729-6.789,10.813-11.738,15.744   c-7.384,7.384-17.398,14.207-28.634,20.479c-11.245,6.348-23.365,11.932-35.612,18.68c-13.978,7.74-28.77,18.858-39.701,35.544   c-5.449,8.249-9.71,17.686-12.416,27.641c-2.742,9.964-3.98,20.412-3.98,31.071c0,11.372,0,20.708,0,20.708   c0,10.719,8.69,19.41,19.41,19.41h46.762c10.719,0,19.41-8.691,19.41-19.41c0,0,0-9.336,0-20.708c0-4.107,0.467-6.755,0.917-8.436   c0.773-2.512,1.206-3.14,2.47-4.668c1.29-1.452,3.895-3.674,8.698-6.331c7.019-3.946,18.298-9.276,31.07-16.176   c19.121-10.456,42.367-24.646,61.972-48.062c9.752-11.686,18.374-25.758,24.323-41.968c6.001-16.21,9.242-34.431,9.226-53.96   C410.243,120.761,404.879,101.971,396.138,85.295z"/>
	<path class="st0" d="M228.809,406.44c-29.152,0-52.788,23.644-52.788,52.788c0,29.136,23.637,52.772,52.788,52.772   c29.136,0,52.763-23.636,52.763-52.772C281.572,430.084,257.945,406.44,228.809,406.44z"/>
</g>
</svg>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-700">If i don't have credit card i will get cashback?</h4>
                    <p class="text-gray-600 my-2">Simple answer is yes, we seeing everyone as same! </p>

                </div>
            </div>
            
            <div class="flex space-x-8 mt-8">
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h12 w-12 text-blue-600"  version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fe4c50;}
</style>
<g>
	<path class="st0" d="M396.138,85.295c-13.172-25.037-33.795-45.898-59.342-61.03C311.26,9.2,280.435,0.001,246.98,0.001   c-41.238-0.102-75.5,10.642-101.359,25.521c-25.962,14.826-37.156,32.088-37.156,32.088c-4.363,3.786-6.824,9.294-6.721,15.056   c0.118,5.77,2.775,11.186,7.273,14.784l35.933,28.78c7.324,5.864,17.806,5.644,24.875-0.518c0,0,4.414-7.978,18.247-15.88   c13.91-7.85,31.945-14.173,58.908-14.258c23.517-0.051,44.022,8.725,58.016,20.717c6.952,5.941,12.145,12.594,15.328,18.68   c3.208,6.136,4.379,11.5,4.363,15.574c-0.068,13.766-2.742,22.77-6.603,30.442c-2.945,5.729-6.789,10.813-11.738,15.744   c-7.384,7.384-17.398,14.207-28.634,20.479c-11.245,6.348-23.365,11.932-35.612,18.68c-13.978,7.74-28.77,18.858-39.701,35.544   c-5.449,8.249-9.71,17.686-12.416,27.641c-2.742,9.964-3.98,20.412-3.98,31.071c0,11.372,0,20.708,0,20.708   c0,10.719,8.69,19.41,19.41,19.41h46.762c10.719,0,19.41-8.691,19.41-19.41c0,0,0-9.336,0-20.708c0-4.107,0.467-6.755,0.917-8.436   c0.773-2.512,1.206-3.14,2.47-4.668c1.29-1.452,3.895-3.674,8.698-6.331c7.019-3.946,18.298-9.276,31.07-16.176   c19.121-10.456,42.367-24.646,61.972-48.062c9.752-11.686,18.374-25.758,24.323-41.968c6.001-16.21,9.242-34.431,9.226-53.96   C410.243,120.761,404.879,101.971,396.138,85.295z"/>
	<path class="st0" d="M228.809,406.44c-29.152,0-52.788,23.644-52.788,52.788c0,29.136,23.637,52.772,52.788,52.772   c29.136,0,52.763-23.636,52.763-52.772C281.572,430.084,257.945,406.44,228.809,406.44z"/>
</g>
</svg>

                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-700">How much i will get cashback?</h4>
                    <p class="text-gray-600 my-2">Its based on what product you have pruchased you can see cahsback amount when you select that product!</p>

                </div>
            </div>

            <div class="flex space-x-8 mt-8">
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h12 w-12 text-blue-600"  version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fe4c50;}
</style>
<g>
	<path class="st0" d="M396.138,85.295c-13.172-25.037-33.795-45.898-59.342-61.03C311.26,9.2,280.435,0.001,246.98,0.001   c-41.238-0.102-75.5,10.642-101.359,25.521c-25.962,14.826-37.156,32.088-37.156,32.088c-4.363,3.786-6.824,9.294-6.721,15.056   c0.118,5.77,2.775,11.186,7.273,14.784l35.933,28.78c7.324,5.864,17.806,5.644,24.875-0.518c0,0,4.414-7.978,18.247-15.88   c13.91-7.85,31.945-14.173,58.908-14.258c23.517-0.051,44.022,8.725,58.016,20.717c6.952,5.941,12.145,12.594,15.328,18.68   c3.208,6.136,4.379,11.5,4.363,15.574c-0.068,13.766-2.742,22.77-6.603,30.442c-2.945,5.729-6.789,10.813-11.738,15.744   c-7.384,7.384-17.398,14.207-28.634,20.479c-11.245,6.348-23.365,11.932-35.612,18.68c-13.978,7.74-28.77,18.858-39.701,35.544   c-5.449,8.249-9.71,17.686-12.416,27.641c-2.742,9.964-3.98,20.412-3.98,31.071c0,11.372,0,20.708,0,20.708   c0,10.719,8.69,19.41,19.41,19.41h46.762c10.719,0,19.41-8.691,19.41-19.41c0,0,0-9.336,0-20.708c0-4.107,0.467-6.755,0.917-8.436   c0.773-2.512,1.206-3.14,2.47-4.668c1.29-1.452,3.895-3.674,8.698-6.331c7.019-3.946,18.298-9.276,31.07-16.176   c19.121-10.456,42.367-24.646,61.972-48.062c9.752-11.686,18.374-25.758,24.323-41.968c6.001-16.21,9.242-34.431,9.226-53.96   C410.243,120.761,404.879,101.971,396.138,85.295z"/>
	<path class="st0" d="M228.809,406.44c-29.152,0-52.788,23.644-52.788,52.788c0,29.136,23.637,52.772,52.788,52.772   c29.136,0,52.763-23.636,52.763-52.772C281.572,430.084,257.945,406.44,228.809,406.44z"/>
</g>
</svg>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-700">How much time i need get my cashback?</h4>
                    <p class="text-gray-600 my-2">You will get your cashaback instantly once we aware about your purchase incase any issues you can contact us!</p>

                </div>
            </div>

            <div class="flex space-x-8 mt-8">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h12 w-12 text-blue-600"  version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fe4c50;}
</style>
<g>
	<path class="st0" d="M396.138,85.295c-13.172-25.037-33.795-45.898-59.342-61.03C311.26,9.2,280.435,0.001,246.98,0.001   c-41.238-0.102-75.5,10.642-101.359,25.521c-25.962,14.826-37.156,32.088-37.156,32.088c-4.363,3.786-6.824,9.294-6.721,15.056   c0.118,5.77,2.775,11.186,7.273,14.784l35.933,28.78c7.324,5.864,17.806,5.644,24.875-0.518c0,0,4.414-7.978,18.247-15.88   c13.91-7.85,31.945-14.173,58.908-14.258c23.517-0.051,44.022,8.725,58.016,20.717c6.952,5.941,12.145,12.594,15.328,18.68   c3.208,6.136,4.379,11.5,4.363,15.574c-0.068,13.766-2.742,22.77-6.603,30.442c-2.945,5.729-6.789,10.813-11.738,15.744   c-7.384,7.384-17.398,14.207-28.634,20.479c-11.245,6.348-23.365,11.932-35.612,18.68c-13.978,7.74-28.77,18.858-39.701,35.544   c-5.449,8.249-9.71,17.686-12.416,27.641c-2.742,9.964-3.98,20.412-3.98,31.071c0,11.372,0,20.708,0,20.708   c0,10.719,8.69,19.41,19.41,19.41h46.762c10.719,0,19.41-8.691,19.41-19.41c0,0,0-9.336,0-20.708c0-4.107,0.467-6.755,0.917-8.436   c0.773-2.512,1.206-3.14,2.47-4.668c1.29-1.452,3.895-3.674,8.698-6.331c7.019-3.946,18.298-9.276,31.07-16.176   c19.121-10.456,42.367-24.646,61.972-48.062c9.752-11.686,18.374-25.758,24.323-41.968c6.001-16.21,9.242-34.431,9.226-53.96   C410.243,120.761,404.879,101.971,396.138,85.295z"/>
	<path class="st0" d="M228.809,406.44c-29.152,0-52.788,23.644-52.788,52.788c0,29.136,23.637,52.772,52.788,52.772   c29.136,0,52.763-23.636,52.763-52.772C281.572,430.084,257.945,406.44,228.809,406.44z"/>
</g>
</svg>
</div>

                <div>
                    <h4 class="text-xl font-bold text-gray-700">Is there any refer and earn ?</h4>
                    <p class="text-gray-600 my-2"> No, currently not availale we looking into that thanks!</p>

                </div>
            </div>

            <div class="flex space-x-8 mt-8">
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h12 w-12 text-blue-600"  version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fe4c50;}
</style>
<g>
	<path class="st0" d="M396.138,85.295c-13.172-25.037-33.795-45.898-59.342-61.03C311.26,9.2,280.435,0.001,246.98,0.001   c-41.238-0.102-75.5,10.642-101.359,25.521c-25.962,14.826-37.156,32.088-37.156,32.088c-4.363,3.786-6.824,9.294-6.721,15.056   c0.118,5.77,2.775,11.186,7.273,14.784l35.933,28.78c7.324,5.864,17.806,5.644,24.875-0.518c0,0,4.414-7.978,18.247-15.88   c13.91-7.85,31.945-14.173,58.908-14.258c23.517-0.051,44.022,8.725,58.016,20.717c6.952,5.941,12.145,12.594,15.328,18.68   c3.208,6.136,4.379,11.5,4.363,15.574c-0.068,13.766-2.742,22.77-6.603,30.442c-2.945,5.729-6.789,10.813-11.738,15.744   c-7.384,7.384-17.398,14.207-28.634,20.479c-11.245,6.348-23.365,11.932-35.612,18.68c-13.978,7.74-28.77,18.858-39.701,35.544   c-5.449,8.249-9.71,17.686-12.416,27.641c-2.742,9.964-3.98,20.412-3.98,31.071c0,11.372,0,20.708,0,20.708   c0,10.719,8.69,19.41,19.41,19.41h46.762c10.719,0,19.41-8.691,19.41-19.41c0,0,0-9.336,0-20.708c0-4.107,0.467-6.755,0.917-8.436   c0.773-2.512,1.206-3.14,2.47-4.668c1.29-1.452,3.895-3.674,8.698-6.331c7.019-3.946,18.298-9.276,31.07-16.176   c19.121-10.456,42.367-24.646,61.972-48.062c9.752-11.686,18.374-25.758,24.323-41.968c6.001-16.21,9.242-34.431,9.226-53.96   C410.243,120.761,404.879,101.971,396.138,85.295z"/>
	<path class="st0" d="M228.809,406.44c-29.152,0-52.788,23.644-52.788,52.788c0,29.136,23.637,52.772,52.788,52.772   c29.136,0,52.763-23.636,52.763-52.772C281.572,430.084,257.945,406.44,228.809,406.44z"/>
</g>
</svg>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-700">Cashback get when i order via cash on delivery also?</h4>
                    <p class="text-gray-600 my-2">yes, you wil get cashabck once you own that product!</p>
             
                </div>
            </div>

            <div class="flex space-x-8 mt-8">
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h12 w-12 text-blue-600"  version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fe4c50;}
</style>
<g>
	<path class="st0" d="M396.138,85.295c-13.172-25.037-33.795-45.898-59.342-61.03C311.26,9.2,280.435,0.001,246.98,0.001   c-41.238-0.102-75.5,10.642-101.359,25.521c-25.962,14.826-37.156,32.088-37.156,32.088c-4.363,3.786-6.824,9.294-6.721,15.056   c0.118,5.77,2.775,11.186,7.273,14.784l35.933,28.78c7.324,5.864,17.806,5.644,24.875-0.518c0,0,4.414-7.978,18.247-15.88   c13.91-7.85,31.945-14.173,58.908-14.258c23.517-0.051,44.022,8.725,58.016,20.717c6.952,5.941,12.145,12.594,15.328,18.68   c3.208,6.136,4.379,11.5,4.363,15.574c-0.068,13.766-2.742,22.77-6.603,30.442c-2.945,5.729-6.789,10.813-11.738,15.744   c-7.384,7.384-17.398,14.207-28.634,20.479c-11.245,6.348-23.365,11.932-35.612,18.68c-13.978,7.74-28.77,18.858-39.701,35.544   c-5.449,8.249-9.71,17.686-12.416,27.641c-2.742,9.964-3.98,20.412-3.98,31.071c0,11.372,0,20.708,0,20.708   c0,10.719,8.69,19.41,19.41,19.41h46.762c10.719,0,19.41-8.691,19.41-19.41c0,0,0-9.336,0-20.708c0-4.107,0.467-6.755,0.917-8.436   c0.773-2.512,1.206-3.14,2.47-4.668c1.29-1.452,3.895-3.674,8.698-6.331c7.019-3.946,18.298-9.276,31.07-16.176   c19.121-10.456,42.367-24.646,61.972-48.062c9.752-11.686,18.374-25.758,24.323-41.968c6.001-16.21,9.242-34.431,9.226-53.96   C410.243,120.761,404.879,101.971,396.138,85.295z"/>
	<path class="st0" d="M228.809,406.44c-29.152,0-52.788,23.644-52.788,52.788c0,29.136,23.637,52.772,52.788,52.772   c29.136,0,52.763-23.636,52.763-52.772C281.572,430.084,257.945,406.44,228.809,406.44z"/>
</g>
</svg>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-gray-700">Your sevrice available in my country?</h4>
                    <p class="text-gray-600 my-2">Yes, our service available all over the world!</p>

                </div>
            </div>
        </div>
    </div>
</div>
     
    </section>

    <footer class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-12">
        <div class="md:-mx-3 md:flex md:items-center md:justify-between">
        <div class="flex h-full justify-center items-center dark:bg-gray-800">
    <div class="p-6">
        <div
            class="flex flex-wrap items-center w-full max-w-5xl p-5 mx-auto text-left border border-gray-200 rounded lg:flex-nowrap md:p-8 dark:border-gray-700">
         
            <div class="w-full px-1 flex-0 md:w-auto lg:w-1/2">
                <form novalidate="">
                    <input type="hidden" name="tags" value="earlyaccess">
               
                </form>
            </div>
        </div>
    </div>
</div>



        <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© Copyright 2024 Cashbring. All Rights Reserved.</p>
        </div>
    </div>
    </footer>
</main>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>
    <script>
        
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

    </script>
</body>
</html>