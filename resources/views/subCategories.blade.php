<center><h1>Set Sub Category Here...</h1></center>
<br>
<br>
<div>
	<form class="form-horizontal" role="form" name="subcategoryForm" novalidate>
		<div class="form-group">
			<label class="control-label col-md-3" for="idCategory">Category Name<span class="required">*</span></label>
			<div class="col-md-6">
				<select name="idCategory" id="idCategory" ng-model="subcategoryInfo.idCategory" class="form-control input-sm select2dropdown">
					<option value="">Select Category</option>
					<option ng-repeat="(key, value) in categoryList" value="@{{value.id_categories}}">@{{value.category_name}}</option>
				</select>
			</div>

		</div>
		<div>
			<label for="name">Sub Category Name<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="name" name="name" ng-model="subcategoryInfo.name"  placeholder="Write Sub Category Name">
				</div>
			</div>
		</div>

		<div>
			<label for="name">Sub Category Details<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="details" name="details" ng-model="subcategoryInfo.details"  placeholder="Write Sub Category Details">
				</div>
			</div>
		</div>
		<br><br>
		<div class="form-group">
			<button ng-click="createSubCategory()" class="btn btn-primary btn-block"> Create Sub Category  </button>
		</div>
	</form>
</div>
<pre>
	@{{subcategoryInfo | json}}
</pre>
