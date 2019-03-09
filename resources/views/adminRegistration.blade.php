<div class="container">

	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>

			<form class="form-horizontal" role="form" name="adminRegistrationForm" novalidate>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="name" class="form-control" ng-model="adminInfo.name" placeholder="Full name"  type="text">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
					</div>
					<input name="email" ng-model="adminInfo.email" class="form-control" placeholder="Email address" type="text">
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="far fa-shield-check"></i> </span>
					</div>
					<input name="code" ng-model="adminInfo.code" class="form-control" placeholder="Access Code" type="text">
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>
					<select class="custom-select" disabled=""di style="max-width: 120px;">
						<option value="+880">+880</option>
					</select>
					<input name="phone" ng-model="adminInfo.phone" class="form-control" placeholder="Phone number" type="text">
				</div> <!-- form-group// -->
				<!-- form-group end.// -->
				<div  class="form-group input-group">

					<div class="input-group-prepend">
						<span class="input-group-text"></span>
					</div>
					<textarea name="address" ng-model="adminInfo.address" placeholder="Put Your Address"></textarea>
				</div>
				
				<div class="form-group input-group">
					<label>User Roles</label>
					<select class="custom-select" name="role" ng-model="adminInfo.role" di style="max-width: 120px;">
						<option value="1">Admin</option>
						<option value="2">Super Admin</option>

					</select>
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input name="pass" ng-model="adminInfo.pass" class="form-control" placeholder="Create password" type="password">
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input name="repass" ng-model="adminInfo.repass"class="form-control" placeholder="Repeat password" type="password">
				</div> <!-- form-group// -->                                      
				<div class="form-group">
					<button ng-click="createAdmin()" class="btn btn-primary btn-block"> Create Account  </button>
				</div> <!-- form-group// -->      
				<p class="text-center">Have an account? <a ui-sref="login">Log In</a> </p>                                                                 
			</form>
		</article>
	</div> <!-- card.// -->

</div> 
<!--container end.//-->

<pre>
	<!-- @{{adminInfo | json}} -->
</pre>