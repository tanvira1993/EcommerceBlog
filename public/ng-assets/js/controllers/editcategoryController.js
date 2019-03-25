/* Setup blank page controller */
angular.module('EcommerceApp').controller('editcategoryController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams', 
	function($scope, $rootScope, $location, $timeout, $http,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });
		$scope.id = $stateParams.id;			

		$scope.getselectedCategory= function(){

			$http({
				method:'get',
				url: 'api/editCategory/' +$scope.id
			}).then(function(response) {
				$scope.editcategoryInfo = response.data.data;				
			}, function(response) {
				console.log(response);
			});
		}
		$scope.getselectedCategory(); 
		$scope.createeditCategory = function(){


			$http({
				method: 'post',
				url: 'api/editCategoryasve/' + $scope.id,
				data:$scope.editcategoryInfo
			}).then(function (response) {
				$scope.editcategoryInfo=null;
				$scope.editcategoryForm.$setPristine();

				swal({
					title: 'Success!',
					text: 'Category Edited Successfully.',
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
