<center><h1>Manage Your Product</h1></center>
<table class="table table-dark">
	<thead >
		<tr>
			<th scope="col">SN <br/><input ng-model="search.id_products" class="form-control input-sm" ></th>
			<th scope="col">Product Name <br/><input ng-model="search.product_name" class="form-control input-sm" ></th>
			<th scope="col">Product Cost <br/><input ng-model="search.product_cost" class="form-control input-sm" ></th>
			<th scope="col">Product Unit Name <br/><input ng-model="search.product_unit_name" class="form-control input-sm" ></th>
			<th scope="col">Action</th>

		</tr>
	</thead>
	<tbody>
		<tr scope="row" ng-repeat="(key, value) in fileInfo | filter:{id_products: search.id_products, product_name: search.product_name, product_cost: search.product_cost, product_unit_name: search.product_unit_name}">
			<td>@{{value.id_products}}</td>
			<td>@{{value.product_name}}</td>
			<td>@{{value.product_cost}}</td>
			<td>@{{value.product_unit_name}}</td>
			<td> <a ng-href="#!/product/edit/@{{value.id_products}}" class="btn btn-primary"> Edit</a><a ng-click="deleteProduct(value.id_products)" class="btn btn-danger"> Delete</a></td>



		</tr>
		
		
	</tbody>
</table>