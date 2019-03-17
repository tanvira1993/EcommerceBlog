/* Setup blank page controller */
angular.module('EcommerceApp').controller('managecategoryController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });

	$scope.categoryInfo = {};
	$scope.getCategoryInfo = function(){

		$http({
			method:'get',
			url: 'api/categoryList'
		}).then(function(response) {
			$scope.categoryInfo = response.data.data;				
		}, function(response) {
			console.log(response);
		});
	}
	
	$scope.deleteCategory = function(id){
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this Category!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel!",
			CancelButtonClass: "btn-danger",
			closeOnConfirm: false,
			closeOnCancel: true
		},
		function(isConfirm) {
			if (isConfirm) {

				$http({
					method:'delete',
					url: 'api/category/delete/'+id
				}).then(function(response) {
					console.log(response);
					$scope.getCategoryInfo();
					swal("Deleted!", "Your category has been deleted.", "success");

				}, function(response) {
					console.log(response);
				});

			} 
		});


	}
	$scope.getCategoryInfo();
}]);
