<center><h1>Your Total Delivered Order List</h1></center>
<table class="table table-dark">
	<thead >
		<tr>
			<th scope="col">SN <br/><input ng-model="search.id_order_list" class="form-control input-sm" ></th>
			<th scope="col">User Name <br/><input ng-model="search.user_name" class="form-control input-sm" ></th>
			<th scope="col">User Address <br/><input ng-model="search.user_address" class="form-control input-sm" ></th>
			<th scope="col">User Phone No<br/><input ng-model="search.user_phone_no" class="form-control input-sm" ></th>
			<th scope="col">Action</th>

		</tr>
	</thead>
	<tbody>
		
		<tr scope="row" ng-repeat="(key, value) in fileInfo | filter:{id_order_list: search.id_order_list, user_name: search.user_name, user_address: search.user_address, user_phone_no: search.user_phone_no}">
			<td>@{{value.id_order_list}}</td>
			<td>@{{value.name}}</td>
			<td>@{{value.user_address}}</td>
			<td>@{{value.user_phone_no}}</td>			
			<td> <a href="/order/billSlip/@{{value.id_order_list}}" class="btn btn-primary"> Bill Slip </a> <span class="btn btn-info" disabled>Delivered</span></td>



		</tr>
		
	</tbody>
</table> 