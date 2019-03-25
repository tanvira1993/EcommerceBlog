/* Setup blank page controller */
angular.module('EcommerceApp').controller('editsubcategoryController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams', 
	function($scope, $rootScope, $location, $timeout, $http,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });
		$scope.id = $stateParams.id;
		$scope.getselectedCategoryInfo= function(){

			$http({
				method:'get',
				url: 'api/editsubCategory/' +$scope.id
			}).then(function(response) {
				$scope.editsubcategoryInfo = response.data.data;				
			}, function(response) {
				console.log(response);
			});
		}
		$scope.getselectedCategoryInfo(); 	
		
		$scope.createeditSubCategory = function(){


			$http({
				method: 'post',
				url: 'api/editsubCategoryasve/' + $scope.id,
				data:$scope.editsubcategoryInfo
			}).then(function (response) {
				$scope.editsubcategoryInfo=null;
				$scope.editsubcategoryForm.$setPristine();

				swal({
					title: 'Success!',
					text: 'Sub Category Edited Successfully.',
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
