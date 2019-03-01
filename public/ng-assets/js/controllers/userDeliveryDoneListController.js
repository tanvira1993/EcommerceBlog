angular.module('EcommerceApp').controller('userDeliveryDoneListController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window','$stateParams', 
	function($scope, $rootScope, $location, $timeout, $http,$window,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.fileInfo = {};
			$scope.getUserdeliveryDoneInfo = function(){

				$http({
					method:'get',
					url: 'api/user/deliveryDone/details'
				}).then(function(response) {
					$scope.fileInfo = response.data.data;				
				}, function(response) {
					console.log(response);
				});
			}


			$scope.getUserdeliveryDoneInfo();

		});
	}]);