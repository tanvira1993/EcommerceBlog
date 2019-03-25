/* Setup blank page controller */
angular.module('EcommerceApp').controller('managesubcategoryController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });

	$scope.subCategoryInfo = {};
	$scope.getSubCategoryInfo = function(){

		$http({
			method:'get',
			url: 'api/subCategoryList'
		}).then(function(response) {
			$scope.subCategoryInfo = response.data.data;				
		}, function(response) {
			console.log(response);
		});
	}
	$scope.getSubCategoryInfo();

	$scope.deleteSubCategory = function(id){
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this Sub Category!",
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
					url: 'api/subcategory/delete/'+id
				}).then(function(response) {
					console.log(response);
					$scope.getSubCategoryInfo();
					swal("Deleted!", "Your sub category has been deleted.", "success");

				}, function(response) {
					console.log(response);
				});

			} 
		});


	}
}]);
