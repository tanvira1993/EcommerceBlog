<center><h1>Manage Sub Categories</h1></center>

<table class="table table-dark">
	<thead >
		<tr>
			<th scope="col">SN <br/><input ng-model="search.id_sub_categories" class="form-control input-sm" ></th>
			<th scope="col">Sub Category<br/><input ng-model="search.sub_categories_name" class="form-control input-sm" ></th>
			<th scope="col">Sun Category Details <br/><input ng-model="search.sub_categories_details" class="form-control input-sm" ></th>
			
			<th scope="col">Action</th>

		</tr>
	</thead>
	<tbody>
		
		<tr scope="row" ng-repeat="(key, value) in subCategoryInfo | filter:{id_sub_categories: search.id_sub_categories, sub_categories_name: search.sub_categories_name, sub_categories_details: search.sub_categories_details}">
			<td>@{{value.id_sub_categories}}</td>
			<td>@{{value.sub_categories_name}}</td>
			<td>@{{value.sub_categories_details}}</td>			
			<td ng-if="idUserRole==2"> <a ng-href="#!/subcategory/edit/@{{value.id_sub_categories}}" class="btn btn-primary"> Edit</a><a ng-click="deleteSubCategory(value.id_sub_categories)" class="btn btn-danger"> Delete</a></td>

		</tr>
		
	</tbody>
</table> 