<center><h1>Edit Category</h1></center>
<div>
	<form class="form-horizontal" role="form" name="editcategoryForm" novalidate>
		<div>
			<label for="name">Category Name<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="name" name="name" ng-model="editcategoryInfo.category_name"  placeholder="">
				</div>
			</div>
		</div>

		<div>
			<label for="name">Category Details<span class="required">*</span></label>
			<div>
				<div >
					<input type="text" class="form-control" id="details" name="details" ng-model="editcategoryInfo.category_details"  placeholder="">
				</div>
			</div>
		</div>
		<br><br>
		<div class="form-group">
			<button ng-click="createeditCategory()" class="btn btn-primary btn-block"> update Category  </button>
		</div>
	</form>
</div>
<pre>
	@{{editcategoryInfo | json}}
</pre>