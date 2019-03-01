angular.module('EcommerceApp').controller('userOrderListController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window','$stateParams', 
	function($scope, $rootScope, $location, $timeout, $http,$window,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.fileInfo = {};
			$scope.getUserOrderInfo = function(){

				$http({
					method:'get',
					url: 'api/user/order/details'
				}).then(function(response) {
					$scope.fileInfo = response.data.data;				
				}, function(response) {
					console.log(response);
				});
			}


			$scope.getUserOrderInfo();

		});
	}]);