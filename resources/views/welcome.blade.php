<!DOCTYPE html>
<html lang="en" data-ng-app="EcommerceApp">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Index</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>

      <body ng-controller="AppController">
      	<!-- HEADER -->
      	<header>
      		<!-- top Header -->
      		<div id="top-header">
      			<div class="container">
      				<div class="pull-left">
      					<span>Welcome to E-shop!</span>
      				</div>
      				<div class="pull-right">
      					<ul class="header-top-links">
      						<li><a href="#">Store</a></li>
      						<li><a href="#">Newsletter</a></li>
      						<li><a href="#">FAQ</a></li>
      						<li class="dropdown default-dropdown">
      							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
      							<ul class="custom-menu">
      								<li><a href="#">English (ENG)</a></li>
      								<li><a href="#">Russian (Ru)</a></li>
      								<li><a href="#">French (FR)</a></li>
      								<li><a href="#">Spanish (Es)</a></li>
      							</ul>
      						</li>
      						<li class="dropdown default-dropdown">
      							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
      							<ul class="custom-menu">
      								<li><a href="#">USD ($)</a></li>
      								<li><a href="#">EUR (€)</a></li>
      							</ul>
      						</li>
      					</ul>
      				</div>
      			</div>
      		</div>
      		<!-- /top Header -->

      		<!-- header -->
      		<div id="header">
      			<div class="container">
      				<div class="pull-left">
      					<!-- Logo -->
      					<div class="header-logo">
      						<a class="logo" href="#">
      							<img src="./img/logo.png" alt="">
      						</a>
      					</div>
      					<!-- /Logo -->

      					<!-- Search -->
      					<div class="header-search">
      						<form>
      							<input class="input search-input" type="text" placeholder="Enter your keyword">
      							<select class="input search-categories">
      								<option value="0">All Categories</option>
      								<option value="1">Category 01</option>
      								<option value="1">Category 02</option>
      							</select>
      							<button class="search-btn"><i class="fa fa-search"></i></button>
      						</form>
      					</div>
      					<!-- /Search -->
      				</div>
      				<div class="pull-right">
      					<ul class="header-btns">
      						<!-- Account -->
      						<li class="header-account dropdown default-dropdown">
      							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
      								<div class="header-btns-icon">
      									<i class="fa fa-user-o"></i>
      								</div>
      								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
      							</div>
      							<a ui-sref="login" class="text-uppercase">Login</a> / <a ui-sref="userreg" class="text-uppercase">Join</a>
      							<ul class="custom-menu">


      								<li ng-if="$rootScope.idUserRole=='2'"><a ui-sref="adminview"><i class="fa fa-heart-o"></i> ADD Product</a></li>  
      								<li ><a ui-sref="manageProduct"><i class="fa fa-user-o"></i> Manage Product</a></li>
      								<li ><a ui-sref="adminreg"><i class="fa fa-heart-o"></i> Create Admin/Super Admin Account</a></li>  
      								<!-- <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li> -->
      								<li><a ui-sref="login"><i class="fa fa-unlock-alt"></i> Login</a></li>
      								<button ng-click="logout()"><i class="fa fa-exchange"></i>Logout</button>

      								<!-- <li><a ui-sref="userreg"><i class="fa fa-user-plus"></i> Create An Account</a></li> -->
      							</ul>
      						</li>
      						<!-- /Account -->

      						<!-- Cart -->
      						<li class="header-cart dropdown default-dropdown">
      							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
      								<div class="header-btns-icon">
      									<i class="fa fa-shopping-cart"></i>
      									<span class="qty">3</span>
      								</div>
      								<strong class="text-uppercase">My Cart:</strong>
      								<br>
      								<span>35.20$</span>
      							</a>
      							<div class="custom-menu">
      								<div id="shopping-cart">
      									<div class="shopping-cart-list">
      										<div class="product product-widget">
      											<div class="product-thumb">
      												<img src="./img/thumb-product01.jpg" alt="">
      											</div>
      											<div class="product-body">
      												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
      												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
      											</div>
      											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
      										</div>
      										<div class="product product-widget">
      											<div class="product-thumb">
      												<img src="./img/thumb-product01.jpg" alt="">
      											</div>
      											<div class="product-body">
      												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
      												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
      											</div>
      											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
      										</div>
      									</div>
      									<div class="shopping-cart-btns">
      										<button class="main-btn">View Cart</button>
      										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
      									</div>
      								</div>
      							</div>
      						</li>
      						<!-- /Cart -->

      						<!-- Mobile nav toggle-->
      						<li class="nav-toggle">
      							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
      						</li>
      						<!-- / Mobile nav toggle -->
      					</ul>
      				</div>
      			</div>
      			<!-- header -->
      		</div>
      		<!-- container -->
      	</header>
      	<!-- /HEADER -->

      	<!-- NAVIGATION -->
      	<div id="navigation">
      		<!-- container -->
      		<div class="container">
      			<div id="responsive-nav">
      				<!-- category nav -->
      				<div class="category-nav show-on-click">
      					<span class="category-header">Categories <i class="fa fa-list"></i></span>
      					<ul class="category-list">
      						<li class="dropdown side-dropdown">
      							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
      							<div class="custom-menu">
      								<div class="row">
      									<div class="col-md-4">
      										<ul class="list-links">
      											<li>
      												<h3 class="list-links-title">Categories</h3></li>
      												<li><a href="#">Women’s Clothing</a></li>
      												<li><a href="#">Men’s Clothing</a></li>
      												<li><a href="#">Phones & Accessories</a></li>
      												<li><a href="#">Jewelry & Watches</a></li>
      												<li><a href="#">Bags & Shoes</a></li>
      											</ul>
      											<hr class="hidden-md hidden-lg">
      										</div>
      										<div class="col-md-4">
      											<ul class="list-links">
      												<li>
      													<h3 class="list-links-title">Categories</h3></li>
      													<li><a href="#">Women’s Clothing</a></li>
      													<li><a href="#">Men’s Clothing</a></li>
      													<li><a href="#">Phones & Accessories</a></li>
      													<li><a href="#">Jewelry & Watches</a></li>
      													<li><a href="#">Bags & Shoes</a></li>
      												</ul>
      												<hr class="hidden-md hidden-lg">
      											</div>
      											<div class="col-md-4">
      												<ul class="list-links">
      													<li>
      														<h3 class="list-links-title">Categories</h3></li>
      														<li><a href="#">Women’s Clothing</a></li>
      														<li><a href="#">Men’s Clothing</a></li>
      														<li><a href="#">Phones & Accessories</a></li>
      														<li><a href="#">Jewelry & Watches</a></li>
      														<li><a href="#">Bags & Shoes</a></li>
      													</ul>
      												</div>
      											</div>
      											<div class="row hidden-sm hidden-xs">
      												<div class="col-md-12">
      													<hr>
      													<a class="banner banner-1" href="#">
      														<img src="./img/banner05.jpg" alt="">
      														<div class="banner-caption text-center">
      															<h2 class="white-color">NEW COLLECTION</h2>
      															<h3 class="white-color font-weak">HOT DEAL</h3>
      														</div>
      													</a>
      												</div>
      											</div>
      										</div>
      									</li>
      									<li><a href="#">Men’s Clothing</a></li>
      									<li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
      										<div class="custom-menu">
      											<div class="row">
      												<div class="col-md-4">
      													<ul class="list-links">
      														<li>
      															<h3 class="list-links-title">Categories</h3></li>
      															<li><a href="#">Women’s Clothing</a></li>
      															<li><a href="#">Men’s Clothing</a></li>
      															<li><a href="#">Phones & Accessories</a></li>
      															<li><a href="#">Jewelry & Watches</a></li>
      															<li><a href="#">Bags & Shoes</a></li>
      														</ul>
      														<hr>
      														<ul class="list-links">
      															<li>
      																<h3 class="list-links-title">Categories</h3></li>
      																<li><a href="#">Women’s Clothing</a></li>
      																<li><a href="#">Men’s Clothing</a></li>
      																<li><a href="#">Phones & Accessories</a></li>
      																<li><a href="#">Jewelry & Watches</a></li>
      																<li><a href="#">Bags & Shoes</a></li>
      															</ul>
      															<hr class="hidden-md hidden-lg">
      														</div>
      														<div class="col-md-4">
      															<ul class="list-links">
      																<li>
      																	<h3 class="list-links-title">Categories</h3></li>
      																	<li><a href="#">Women’s Clothing</a></li>
      																	<li><a href="#">Men’s Clothing</a></li>
      																	<li><a href="#">Phones & Accessories</a></li>
      																	<li><a href="#">Jewelry & Watches</a></li>
      																	<li><a href="#">Bags & Shoes</a></li>
      																</ul>
      																<hr>
      																<ul class="list-links">
      																	<li>
      																		<h3 class="list-links-title">Categories</h3></li>
      																		<li><a href="#">Women’s Clothing</a></li>
      																		<li><a href="#">Men’s Clothing</a></li>
      																		<li><a href="#">Phones & Accessories</a></li>
      																		<li><a href="#">Jewelry & Watches</a></li>
      																		<li><a href="#">Bags & Shoes</a></li>
      																	</ul>
      																</div>
      																<div class="col-md-4 hidden-sm hidden-xs">
      																	<a class="banner banner-2" href="#">
      																		<img src="./img/banner04.jpg" alt="">
      																		<div class="banner-caption">
      																			<h3 class="white-color">NEW<br>COLLECTION</h3>
      																		</div>
      																	</a>
      																</div>
      															</div>
      														</div>
      													</li>
      													<li><a href="#">Computer & Office</a></li>
      													<li><a href="#">Consumer Electronics</a></li>
      													<li class="dropdown side-dropdown">
      														<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-angle-right"></i></a>
      														<div class="custom-menu">
      															<div class="row">
      																<div class="col-md-4">
      																	<ul class="list-links">
      																		<li>
      																			<h3 class="list-links-title">Categories</h3></li>
      																			<li><a href="#">Women’s Clothing</a></li>
      																			<li><a href="#">Men’s Clothing</a></li>
      																			<li><a href="#">Phones & Accessories</a></li>
      																			<li><a href="#">Jewelry & Watches</a></li>
      																			<li><a href="#">Bags & Shoes</a></li>
      																		</ul>
      																		<hr>
      																		<ul class="list-links">
      																			<li>
      																				<h3 class="list-links-title">Categories</h3></li>
      																				<li><a href="#">Women’s Clothing</a></li>
      																				<li><a href="#">Men’s Clothing</a></li>
      																				<li><a href="#">Phones & Accessories</a></li>
      																				<li><a href="#">Jewelry & Watches</a></li>
      																				<li><a href="#">Bags & Shoes</a></li>
      																			</ul>
      																			<hr class="hidden-md hidden-lg">
      																		</div>
      																		<div class="col-md-4">
      																			<ul class="list-links">
      																				<li>
      																					<h3 class="list-links-title">Categories</h3></li>
      																					<li><a href="#">Women’s Clothing</a></li>
      																					<li><a href="#">Men’s Clothing</a></li>
      																					<li><a href="#">Phones & Accessories</a></li>
      																					<li><a href="#">Jewelry & Watches</a></li>
      																					<li><a href="#">Bags & Shoes</a></li>
      																				</ul>
      																				<hr>
      																				<ul class="list-links">
      																					<li>
      																						<h3 class="list-links-title">Categories</h3></li>
      																						<li><a href="#">Women’s Clothing</a></li>
      																						<li><a href="#">Men’s Clothing</a></li>
      																						<li><a href="#">Phones & Accessories</a></li>
      																						<li><a href="#">Jewelry & Watches</a></li>
      																						<li><a href="#">Bags & Shoes</a></li>
      																					</ul>
      																					<hr class="hidden-md hidden-lg">
      																				</div>
      																				<div class="col-md-4">
      																					<ul class="list-links">
      																						<li>
      																							<h3 class="list-links-title">Categories</h3></li>
      																							<li><a href="#">Women’s Clothing</a></li>
      																							<li><a href="#">Men’s Clothing</a></li>
      																							<li><a href="#">Phones & Accessories</a></li>
      																							<li><a href="#">Jewelry & Watches</a></li>
      																							<li><a href="#">Bags & Shoes</a></li>
      																						</ul>
      																						<hr>
      																						<ul class="list-links">
      																							<li>
      																								<h3 class="list-links-title">Categories</h3></li>
      																								<li><a href="#">Women’s Clothing</a></li>
      																								<li><a href="#">Men’s Clothing</a></li>
      																								<li><a href="#">Phones & Accessories</a></li>
      																								<li><a href="#">Jewelry & Watches</a></li>
      																								<li><a href="#">Bags & Shoes</a></li>
      																							</ul>
      																						</div>
      																					</div>
      																				</div>
      																			</li>
      																			<li><a href="#">Bags & Shoes</a></li>
      																			<li><a href="#">View All</a></li>
      																		</ul>
      																	</div>
      																	<!-- /category nav -->

      																	<!-- menu nav -->
      																	<div class="menu-nav">
      																		<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
      																		<ul class="menu-list">
      																			<li><a ui-sref="EcommerceProduct">Home</a></li>
      																			<!-- <li><a href="#">Home</a></li> -->
      																			<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
      																				<div class="custom-menu">
      																					<div class="row">
      																						<div class="col-md-4">
      																							<ul class="list-links">
      																								<li>
      																									<h3 class="list-links-title">Categories</h3></li>
      																									<li><a href="#">Women’s Clothing</a></li>
      																									<li><a href="#">Men’s Clothing</a></li>
      																									<li><a href="#">Phones & Accessories</a></li>
      																									<li><a href="#">Jewelry & Watches</a></li>
      																									<li><a href="#">Bags & Shoes</a></li>
      																								</ul>
      																								<hr class="hidden-md hidden-lg">
      																							</div>
      																							<div class="col-md-4">
      																								<ul class="list-links">
      																									<li>
      																										<h3 class="list-links-title">Categories</h3></li>
      																										<li><a href="#">Women’s Clothing</a></li>
      																										<li><a href="#">Men’s Clothing</a></li>
      																										<li><a href="#">Phones & Accessories</a></li>
      																										<li><a href="#">Jewelry & Watches</a></li>
      																										<li><a href="#">Bags & Shoes</a></li>
      																									</ul>
      																									<hr class="hidden-md hidden-lg">
      																								</div>
      																								<div class="col-md-4">
      																									<ul class="list-links">
      																										<li>
      																											<h3 class="list-links-title">Categories</h3></li>
      																											<li><a href="#">Women’s Clothing</a></li>
      																											<li><a href="#">Men’s Clothing</a></li>
      																											<li><a href="#">Phones & Accessories</a></li>
      																											<li><a href="#">Jewelry & Watches</a></li>
      																											<li><a href="#">Bags & Shoes</a></li>
      																										</ul>
      																									</div>
      																								</div>
      																								<div class="row hidden-sm hidden-xs">
      																									<div class="col-md-12">
      																										<hr>
      																										<a class="banner banner-1" href="#">
      																											<img src="./img/banner05.jpg" alt="">
      																											<div class="banner-caption text-center">
      																												<h2 class="white-color">NEW COLLECTION</h2>
      																												<h3 class="white-color font-weak">HOT DEAL</h3>
      																											</div>
      																										</a>
      																									</div>
      																								</div>
      																							</div>
      																						</li>
      																						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
      																							<div class="custom-menu">
      																								<div class="row">
      																									<div class="col-md-3">
      																										<div class="hidden-sm hidden-xs">
      																											<a class="banner banner-1" href="#">
      																												<img src="./img/banner06.jpg" alt="">
      																												<div class="banner-caption text-center">
      																													<h3 class="white-color text-uppercase">Women’s</h3>
      																												</div>
      																											</a>
      																											<hr>
      																										</div>
      																										<ul class="list-links">
      																											<li>
      																												<h3 class="list-links-title">Categories</h3></li>
      																												<li><a href="#">Women’s Clothing</a></li>
      																												<li><a href="#">Men’s Clothing</a></li>
      																												<li><a href="#">Phones & Accessories</a></li>
      																												<li><a href="#">Jewelry & Watches</a></li>
      																												<li><a href="#">Bags & Shoes</a></li>
      																											</ul>
      																										</div>
      																										<div class="col-md-3">
      																											<div class="hidden-sm hidden-xs">
      																												<a class="banner banner-1" href="#">
      																													<img src="./img/banner07.jpg" alt="">
      																													<div class="banner-caption text-center">
      																														<h3 class="white-color text-uppercase">Men’s</h3>
      																													</div>
      																												</a>
      																											</div>
      																											<hr>
      																											<ul class="list-links">
      																												<li>
      																													<h3 class="list-links-title">Categories</h3></li>
      																													<li><a href="#">Women’s Clothing</a></li>
      																													<li><a href="#">Men’s Clothing</a></li>
      																													<li><a href="#">Phones & Accessories</a></li>
      																													<li><a href="#">Jewelry & Watches</a></li>
      																													<li><a href="#">Bags & Shoes</a></li>
      																												</ul>
      																											</div>
      																											<div class="col-md-3">
      																												<div class="hidden-sm hidden-xs">
      																													<a class="banner banner-1" href="#">
      																														<img src="./img/banner08.jpg" alt="">
      																														<div class="banner-caption text-center">
      																															<h3 class="white-color text-uppercase">Accessories</h3>
      																														</div>
      																													</a>
      																												</div>
      																												<hr>
      																												<ul class="list-links">
      																													<li>
      																														<h3 class="list-links-title">Categories</h3></li>
      																														<li><a href="#">Women’s Clothing</a></li>
      																														<li><a href="#">Men’s Clothing</a></li>
      																														<li><a href="#">Phones & Accessories</a></li>
      																														<li><a href="#">Jewelry & Watches</a></li>
      																														<li><a href="#">Bags & Shoes</a></li>
      																													</ul>
      																												</div>
      																												<div class="col-md-3">
      																													<div class="hidden-sm hidden-xs">
      																														<a class="banner banner-1" href="#">
      																															<img src="./img/banner09.jpg" alt="">
      																															<div class="banner-caption text-center">
      																																<h3 class="white-color text-uppercase">Bags</h3>
      																															</div>
      																														</a>
      																													</div>
      																													<hr>
      																													<ul class="list-links">
      																														<li>
      																															<h3 class="list-links-title">Categories</h3></li>
      																															<li><a href="#">Women’s Clothing</a></li>
      																															<li><a href="#">Men’s Clothing</a></li>
      																															<li><a href="#">Phones & Accessories</a></li>
      																															<li><a href="#">Jewelry & Watches</a></li>
      																															<li><a href="#">Bags & Shoes</a></li>
      																														</ul>
      																													</div>
      																												</div>
      																											</div>
      																										</li>
      																										<!-- <li><a href="#">Sales</a></li> -->
      																										<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
      																											<ul class="custom-menu">
      																												<li ><a ui-sref="orderlist">Product Order Lists</a></li>
      																												<li ><a ui-sref="deliverylist">Order Delivery in Progress Lists</a></li>
      																												<li ><a ui-sref="deliveryDoneList">Completed Delivered Orders List</a></li>
      																												<li ><a ui-sref="userOrderList">Product Order Lists</a></li>
      																												<li ><a ui-sref="userDeliveryPendingList">Order Delivery in Progress Lists</a></li>
      																												<li ><a ui-sref="userDeliveryDoneList">Completed Delivered Orders List</a></li>

      																												<!-- <li><a href="checkout.html">Checkout</a></li> -->
      																											</ul>
      																										</li>
      																									</ul>
      																								</div>
      																								<!-- menu nav -->
      																							</div>
      																						</div>
      																						<!-- /container -->
      																					</div>
      																					<!-- /NAVIGATION -->

      																					<div ui-view> </div>

      																					<!-- FOOTER -->
      																					<footer id="footer" class="section section-grey">
      																						<!-- container -->
      																						<div class="container">
      																							<!-- row -->
      																							<div class="row">
      																								<!-- footer widget -->
      																								<div class="col-md-3 col-sm-6 col-xs-6">
      																									<div class="footer">
      																										<!-- footer logo -->
      																										<div class="footer-logo">
      																											<a class="logo" href="#">
      																												Logo Here
      																											</a>
      																										</div>
      																										<!-- /footer logo -->

      																										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

      																										<!-- footer social -->
      																										<ul class="footer-social">
      																											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
      																											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
      																											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
      																											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      																											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      																										</ul>
      																										<!-- /footer social -->
      																									</div>
      																								</div>
      																								<!-- /footer widget -->

      																								<!-- footer widget -->
      																								<div class="col-md-3 col-sm-6 col-xs-6">
      																									<div class="footer">
      																										<h3 class="footer-header">My Account</h3>
      																										<ul class="list-links">
      																											<li><a href="#">My Account</a></li>
      																										</ul>
      																									</div>
      																								</div>
      																								<!-- /footer widget -->

      																								<div class="clearfix visible-sm visible-xs"></div>

      																								<!-- footer widget -->
      																								<div class="col-md-3 col-sm-6 col-xs-6">
      																									<div class="footer">
      																										<h3 class="footer-header">Customer Service</h3>
      																										<ul class="list-links">
      																											<li><a href="#">About Us</a></li>
      																										</ul>
      																									</div>
      																								</div>
      																								<!-- /footer widget -->

      																								<!-- footer subscribe -->
      																								<div class="col-md-3 col-sm-6 col-xs-6">
      																									<div class="footer">
      																										<h3 class="footer-header">Stay Connected</h3>
      																										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      																										<form>
      																											<div class="form-group">
      																												<input class="input" placeholder="Enter Email Address">
      																											</div>
      																											<button class="primary-btn">Join Newslatter</button>
      																										</form>
      																									</div>
      																								</div>
      																								<!-- /footer subscribe -->
      																							</div>
      																							<!-- /row -->
      																							<hr>
      																							<!-- row -->
      																							<div class="row">
      																								<div class="col-md-8 col-md-offset-2 text-center">
      																									<!-- footer copyright -->
      																									<div class="footer-copyright">
      																										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      																										Copyright &copy;  by <a href="www.devweber.com" target="_blank">Devweber</a>
      																										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      																									</div>
      																									<!-- /footer copyright -->
      																								</div>
      																							</div>
      																							<!-- /row -->
      																						</div>
      																						<!-- /container -->
      																					</footer>
      																					<!-- /FOOTER -->

      																					<!-- jQuery Plugins -->
      																					<script src="js/jquery.min.js"></script>
      																					<script src="js/bootstrap.min.js"></script>

      																					<script src="js/slick.min.js"></script>
      																					<script src="js/nouislider.min.js"></script>        
      																					<script src="js/angular.min.js"></script>
      																					<script src="js/ocLazyLoad.min.js"></script>
      																					<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.6/angular-ui-router.js"></script>
      																					<script src="ng-assets/js/main.js" type="text/javascript"></script>
      																					<script src="ng-assets/js/routes.js" type="text/javascript"></script>
      																					<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" type="text/javascript"></script>
      																					<script src="ng-assets/js/directives.js" type="text/javascript"></script>
      																					<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>
      																					<!-- <script src="js/angular-file-upload.min.js" type="text/javascript"></script> -->

      																				</body>
      																				</html>
