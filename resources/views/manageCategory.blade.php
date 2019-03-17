<center><h1>Manage Categories</h1></center>

<table class="table table-dark">
	<thead >
		<tr>
			<th scope="col">SN <br/><input ng-model="search.id_categories" class="form-control input-sm" ></th>
			<th scope="col">Category<br/><input ng-model="search.category_name" class="form-control input-sm" ></th>
			<th scope="col">Category Details <br/><input ng-model="search.category_details" class="form-control input-sm" ></th>
			
			<th scope="col">Action</th>

		</tr>
	</thead>
	<tbody>
		
		<tr scope="row" ng-repeat="(key, value) in categoryInfo | filter:{id_categories: search.id_categories, category_name: search.category_name, category_details: search.category_details}">
			<td>@{{value.id_categories}}</td>
			<td>@{{value.category_name}}</td>
			<td>@{{value.category_details}}</td>			
			<td ng-if="idUserRole==2"> <a ng-href="#!/category/edit/@{{value.id_categories}}" class="btn btn-primary"> Edit</a><a ng-click="deleteCategory(value.id_categories)" class="btn btn-danger"> Delete</a></td>



		</tr>
		
	</tbody>
</table> 