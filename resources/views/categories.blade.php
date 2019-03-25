<center><h1>Set Category Here...</h1></center>
<br>
<br>
<div>
	<form class="form-horizontal" role="form" name="categoryForm" novalidate>
		<div>
			<label for="name">Category Name<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="name" name="name" ng-model="categoryInfo.name"  placeholder="Write Category Name">
				</div>
			</div>
		</div>

		<div>
			<label for="name">Category Details<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="details" name="details" ng-model="categoryInfo.details"  placeholder="Write Category Details">
				</div>
			</div>
		</div>
		<br><br>
		<div class="form-group">
			<button ng-click="createCategory()" class="btn btn-primary btn-block"> Create Category  </button>
		</div>
	</form>
</div>
<!-- <pre>
	@{{categoryInfo | json}}
</pre> -->
