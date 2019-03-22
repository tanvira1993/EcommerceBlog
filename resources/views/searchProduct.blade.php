<center><h1>Your Searched...</h1></center>


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
			<div class="col-md-3 col-sm-6 col-xs-6" ng-repeat="(key, value) in searchCategories">
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
				<button type="button" class="btn btn-primary" ng-click="addToCart()" data-dismiss="modal">Order Create</button>
			</div>
		</div>
	</div>
</div>