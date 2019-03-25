<div  class="row">
	<div class="col-md-12">

		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-blue-sharp">
					<i class="fa fa-stack-exchange font-blue-sharp"></i>
					<span class="caption-subject font-blue-sharp bold uppercase">Add Your Product</span>
				</div>
				<div class="tools">
				</div>
			</div>
			<div class="portlet-body">
				<form class="form-horizontal" role="form" name="otherDocumentForm" id="otherDocumentForm" novalidate enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label col-md-3" for="idCategory">Select Category<span class="required">*</span></label>
						<div class="col-md-6">
							<select name="category" id="category" ng-model="category" class="form-control input-sm" ng-change="getSubCategoryList(category)">
								<option value="">Select Category</option>
								<option ng-repeat="(key, value) in categoryInfo" value="@{{value.id_categories}}">@{{value.category_name}}</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" for="idSubCategory">Select Sub Category<span class="required">*</span></label>
						<div class="col-md-6">
							<select name="idSubCategory" id="idSubCategory" required class="form-control input-sm ">
								<option value="">Select Sub Category</option>
								<option ng-repeat="(key, value) in subCategorybycategory" value="@{{value.id_sub_categories}}">@{{value.sub_categories_name}}</option>
							</select>
						</div>

					</div>

					<div>
						<label for="name">Product Name<span class="required">*</span></label>
						<div>
							<div >
								<input type="text" class="form-control" id="name" name="name"  placeholder="Write Product Name">
							</div>
						</div>
					</div>

					<div>
						<label for="cost">Product cost<span class="required">*</span></label>
						<div >
							<div >
								<input type="number" min="0" class="form-control" id="cost" name="cost"  placeholder="Write Product Cost">
							</div>
						</div>
					</div>

					<div>
						<label for="unit">Product Unit Name<span class="required">*</span></label>
						<div>
							<div>
								<input type="text" class="form-control" id="unit" name="unit"  placeholder="Write Product Unit Name">
							</div>
						</div>
					</div>

					

					<div class="form-group">
						<label class="col-md-3 control-label" for="image">Attach<span class="required">*</span></label>
						<div class="col-md-6">
							<div class="input-group">
								<input type="file" class="form-control" id="image" name="image"  placeholder="Select image">
							</div>
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"> </label>
						<div class="col-md-6">
							<div class="input-group">
								<div><p>(NOTE : File size not more than 50MB, File type must be PNG,JPG,PNG,GIF Format)</p></div>
							</div>
						</div>

					</div>


					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="button" class="btn green" ng-click="saveOtherDocument()"><i class="fa fa-save"></i> Save</button>
								<button type="button" class="btn default">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>  <!-- portlet  end --> 

	</div> <!-- col-md-12 end-->

</div> <!--  row end -->