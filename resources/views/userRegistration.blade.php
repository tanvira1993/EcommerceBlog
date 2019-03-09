<div class="container">

	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>

			<form class="form-horizontal" role="form" name="userRegistrationForm" novalidate>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="name" class="form-control" ng-model="userInfo.name" placeholder="Full name"  type="text">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
					</div>
					<input name="email" ng-model="userInfo.email" class="form-control" placeholder="Email address" type="text">
				</div> <!-- form-group// -->

				
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>
					<select class="custom-select" disabled=""di style="max-width: 120px;">
						<option value="+880">+880</option>
					</select>
					<input name="phone" ng-model="userInfo.phone" class="form-control" placeholder="Phone number" type="text">
				</div> <!-- form-group// -->
				<!-- form-group end.// -->
				<div  class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">  </span>
					</div>
					<textarea name="address" ng-model="userInfo.address" placeholder="Put Your Address"></textarea>
				</div>
				
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input name="pass" ng-model="userInfo.pass" class="form-control" placeholder="Create password" type="password">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input name="repass" ng-model="userInfo.repass"class="form-control" placeholder="Repeat password" type="password">
				</div> <!-- form-group// -->                                      
				<div class="form-group">
					<button type="submit" ng-click="createUser()"class="btn btn-primary btn-block"> Create Account  </button>
				</div> <!-- form-group// -->      
				<p class="text-center">Have an account? <a ui-sref="login">Log In</a> </p>                                                                 
			</form>
		</article>
	</div> <!-- card.// -->

</div> 
<!--container end.//-->

<pre>
	<!-- @{{userInfo | json}} -->
</pre>