/* Setup blank page controller */
angular.module('EcommerceApp').controller('categoriesSetController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });


	
	$scope.createCategory = function(){


		$http({
			method: 'post',
			url: 'api/createCategory',
			data:$scope.categoryInfo
		}).then(function (response) {
			$scope.categoryInfo=null;
			$scope.categoryForm.$setPristine();

			swal({
				title: 'Success!',
				text: 'Category Added Successfully.',
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
}]);
