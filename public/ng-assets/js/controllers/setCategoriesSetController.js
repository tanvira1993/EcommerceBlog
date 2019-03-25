/* Setup blank page controller */
angular.module('EcommerceApp').controller('setCategoriesSetController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });

	$scope.getCategoryList = function(){

		$http({
			method:'get',
			url:'api/categoryList'
		}).then(function(response) {
			$scope.categoryList = response.data.data;

		}, function(response) {
			console.log(response);
		});
	}
	
	$scope.createSubCategory = function(){


		$http({
			method: 'post',
			url: 'api/subCreateCategory',
			data:$scope.subcategoryInfo
		}).then(function (response) {
			$scope.subcategoryInfo=null;
			$scope.subcategoryForm.$setPristine();

			swal({
				title: 'Success!',
				text: 'Sub Category Added Successfully.',
				type: 'success'
			}, function () {

				$location.path("/product");

				if (!$scope.$$phase)
					$scope.$apply();
			});

		}, function (response) {

			swal({
				title: response.data.heading,
				text: response.data.message,
				html:true,
				type: 'error'
			});
		});
	}

	$scope.getCategoryList();
}]);
