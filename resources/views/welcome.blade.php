<!DOCTYPE html>
<html lang="en" data-ng-app="EcommerceApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Khilkhet Bazar</title>

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
 <a ng-if="idUserRole==null" ui-sref="login" class="text-uppercase">Login / </a>  <a ng-if="idUserRole==null"ui-sref="userreg" class="text-uppercase">Join</a>
 <ul class="custom-menu">


  <li ng-if="idUserRole==1 || idUserRole==2"><a ui-sref="adminview"><i class="fa fa-heart-o"></i> ADD Product</a></li>  
  <li ng-if="idUserRole==1 || idUserRole==2"><a ui-sref="manageProduct"><i class="fa fa-user-o"></i> Manage Product</a></li>
  <li ng-if="idUserRole==2"><a ui-sref="manageallProduct"><i class="fa fa-user-o"></i> Manage All Product</a></li>
  <li ng-if="idUserRole==2"><a ui-sref="adminreg"><i class="fa fa-heart-o"></i> Create Admin/Super Admin Account</a></li>
  <li ng-if="idUserRole==2"><a ui-sref="categories"><i class="fa fa-heart-o"></i> Create Category</a></li>
  <li ng-if="idUserRole==2"><a ui-sref="manageCategory"><i class="fa fa-heart-o"></i> Manage Category</a></li>
  <li ng-if="idUserRole==2"><a ui-sref="subCategories"><i class="fa fa-heart-o"></i> Create Sub Category</a></li>
  <li ng-if="idUserRole==2"><a ui-sref="manageSubCategory"><i class="fa fa-heart-o"></i> Manage Sub Category</a></li>
  <li ng-if="idUserRole==null"><a ui-sref="login"><i class="fa fa-unlock-alt"></i> Login</a></li>
  <li ng-if="idUserRole!=null"><a ng-click="logout()"><i class="fa fa-unlock-alt"></i> Logout</a></li>

</ul>
</li>
<!-- /Account -->

<!-- Cart -->
<li class="header-cart dropdown default-dropdown" ng-if="idUserRole==0 || idUserRole==null ">
 <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
  <div class="header-btns-icon">
   <i class="fa fa-shopping-cart"></i>
   <!-- Total Cart notification -->
   <span class="qty" ng-if="cartItem.length>0">@{{cartItem.length}}</span> 
 </div>
 <strong class="text-uppercase">My Cart:</strong>
 <br>
 <!-- Total Cost of Shopping  --><span>@{{total}} TK</span>
</a>
<div class="custom-menu">
  <div id="shopping-cart">
   <div class="shopping-cart-list" ng-repeat="(key, value) in cartItem track by $index">
    <div class="product product-widget">
     <div class="product-thumb">
      <img src="uploads/@{{value.productPic}}" alt="Smiley face" height="55" width="15">
    </div>
    <div class="product-body">
      <h3 class="product-price"> @{{value.productCost}}<span class="qty">x@{{value.quantity}}</span><span> =@{{value.productCost* value.quantity}} Tk</span></h3>
      <h2 class="product-name"><a href="#">@{{value.productName}}</a></h2>
    </div>
    <button ng-click="deleteCart($index)" class="cancel-btn"><i class="fa fa-trash"></i></button>
  </div>

</div>
<div class="shopping-cart-btns">

  <!-- <button class="main-btn">View Cart</button> -->
  <button class="primary-btn" data-toggle="modal" data-target="#exampleModal1">Checkout <i class="fa fa-arrow-circle-right"></i></button>
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

   </div>
   <!-- /category nav -->

   <!-- menu nav -->
   <div class="menu-nav">
     <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
     <ul class="menu-list">
      <li><a ui-sref="EcommerceProduct">Home</a></li>
      <!-- <li><a href="#">Home</a></li> -->

      <!-- <li><a href="#">Sales</a></li> -->
      <li  ng-if="idUserRole==0 || idUserRole==1 || idUserRole==2"class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Order Status<i class="fa fa-caret-down"></i></a>
       <ul class="custom-menu">
        <li ng-if="idUserRole==1 || idUserRole==2"><a ui-sref="orderlist">Product Order Lists</a></li>
        <li ng-if="idUserRole==1 || idUserRole==2"><a ui-sref="deliverylist">Order Delivery in Progress Lists</a></li>
        <li ng-if="idUserRole==1 || idUserRole==2"><a ui-sref="deliveryDoneList">Completed Delivered Orders List</a></li>
        <li ng-if="idUserRole==0"><a ui-sref="userOrderList">Your Orders</a></li>
        <li ng-if="idUserRole==0"><a ui-sref="userDeliveryPendingList">Delivery in Progress</a></li>
        <li ng-if="idUserRole==0"><a ui-sref="userDeliveryDoneList">Orders History</a></li>
      </ul>
    </li>

    <li ng-repeat="category in categoryInfo" class="dropdown default-dropdown">
     <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">@{{category.category_name}} <i class="fa fa-caret-down"></i></a>

     <ul class="custom-menu">
      <li ng-repeat="(key, value) in getSubCategories(category.id_categories)">
       <a ng-href="#!/searchProduct/@{{value.id_sub_categories}}">@{{value.sub_categories_name}}</a>
     </li>
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
<!--Modal Start-->

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body mx-3">


          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Address</label>
            <input type="text" ng-model="createorder.address"  id="defaultForm-pass" class="form-control validate">
            

            
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Phone Number</label>
            <input type="text" ng-minlength="1" ng-maxlength="100" ng-model="createorder.phoneNumber" id="defaultForm-pass"  class="form-control validate"> 
          </div>
          
        </div>
      </div>
      <pre>
        @{{createorder|json}}
      </pre>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="orderCreate()" data-dismiss="modal">Order Create</button>
      </div>
    </div>
  </div>
</div>

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
