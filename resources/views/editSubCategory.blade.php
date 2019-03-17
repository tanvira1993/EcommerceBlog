<center><h1>Edit Sub Category</h1></center>

<div>
	<form class="form-horizontal" role="form" name="editsubcategoryForm" novalidate>
		<div class="form-group">
			<label class="control-label col-md-3" for="id_categories">Category Name<span class="required">*</span></label>
			<div class="col-md-6">
				<select name="id_categories" id="id_categories" ng-model="editsubcategoryInfo.idCategories" class="form-control input-sm select2dropdown">
					<option value="">Select Category</option>
					<option ng-repeat="(key, value) in categoryInfo"  value="@{{value.id_categories}}">@{{value.category_name}}</option>
				</select>
			</div>
			

		</div>
		<div>
			<label for="name">Sub Category Name<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="name" name="name" ng-model="editsubcategoryInfo.sub_categories_name"  placeholder="Write Sub Category Name">
				</div>
			</div>
		</div>

		<div>
			<label for="name">Sub Category Details<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="details" name="details" ng-model="editsubcategoryInfo.sub_categories_details"  placeholder="Write Sub Category Details">
				</div>
			</div>
		</div>
		<br><br>
		<div class="form-group">
			<button ng-click="createeditSubCategory()" class="btn btn-primary btn-block"> update Sub Category  </button>
		</div>
	</form>
</div>
<pre>
	@{{editsubcategoryInfo | json}}
</pre>