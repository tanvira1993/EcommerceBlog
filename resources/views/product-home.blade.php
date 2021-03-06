<!-- HOME -->
<div id="home">
	<!-- container -->
	<div class="container">
		<!-- home wrap -->
		<div class="home-wrap">
			<!-- home slick -->
			<div id="home-slick">
				<!-- banner -->
				<div class="banner banner-1">
					<img src="./img/banner01.jpg" alt="">
					<div class="banner-caption text-center">
						<h1>Bags sale</h1>
						<h3 class="white-color font-weak">Up to 50% Discount</h3>
						<button class="primary-btn">Shop Now</button>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="banner banner-1">
					<img src="./img/banner02.jpg" alt="">
					<div class="banner-caption">
						<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
						<button class="primary-btn">Shop Now</button>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="banner banner-1">
					<img src="./img/banner03.jpg" alt="">
					<div class="banner-caption">
						<h1 class="white-color">New Product <span>Collection</span></h1>
						<button class="primary-btn">Shop Now</button>
					</div>
				</div>
				<!-- /banner -->
			</div>
			<!-- /home slick -->
		</div>
		<!-- /home wrap -->
	</div>
	<!-- /container -->
</div>
<!-- /HOME -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- banner -->
			<div class="col-md-4 col-sm-6">
				<a class="banner banner-1" href="#">
					<img src="./img/banner10.jpg" alt="">
					<div class="banner-caption text-center">
						<h2 class="white-color">NEW COLLECTION</h2>
					</div>
				</a>
			</div>
			<!-- /banner -->

			<!-- banner -->
			<div class="col-md-4 col-sm-6">
				<a class="banner banner-1" href="#">
					<img src="./img/banner11.jpg" alt="">
					<div class="banner-caption text-center">
						<h2 class="white-color">NEW COLLECTION</h2>
					</div>
				</a>
			</div>
			<!-- /banner -->

			<!-- banner -->
			<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
				<a class="banner banner-1" href="#">
					<img src="./img/banner12.jpg" alt="">
					<div class="banner-caption text-center">
						<h2 class="white-color">NEW COLLECTION</h2>
					</div>
				</a>
			</div>
			<!-- /banner -->

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Latest Products</h2>
				</div>
			</div>
			<!-- section title -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6" ng-repeat="(key, value) in fileInfo">
				<div class="product product-single">
					<div class="product-thumb">
						<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
						<img src="uploads/@{{value.product_file}}" alt="Smiley face" height="210" width="310">
					</div>
					<div class="product-body">
						<h3 class="product-price" >@{{value.product_cost}} TK.</h3>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o empty"></i>
						</div>
						<h2 class="product-name" ng-value=@{{value.product_name}}><a href="#">@{{value.product_name}}</a></h2>
						<div class="product-btns">
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
							<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
							<button class="primary-btn add-to-cart" ng-click="alert(value.id_products)"ng-value="@{{value}}" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-shopping-cart" ></i> Add to Cart</button>



						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->           
		</div>
		<!-- row -->
		
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Product Add Your List</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<label data-error="wrong" data-success="right" for="defaultForm-email">Product Name</label>
						<input type="email" id="defaultForm-email" class="form-control validate" ng-model="productCart.product_name" readonly>
						
					</div>

					<div class="md-form mb-4">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Cost</label>
						<input type="text" ng-model="productCart.product_cost"  id="defaultForm-pass" readonly class="form-control validate">
						

						
					</div>

					<div class="md-form mb-4">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">quantity</label>
						<input type="text" ng-minlength="1" ng-maxlength="100" ng-model="productCart.item_quantity" id="defaultForm-pass"  class="form-control validate">	
					</div>

				</div>
			</div>
			<!-- <pre>
				@{{productCart|json}}
			</pre> -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" ng-click="addToCart()" data-dismiss="modal">Add To cart</button>
			</div>
		</div>
	</div>
</div>

