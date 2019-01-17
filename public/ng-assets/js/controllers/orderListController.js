angular.module('EcommerceApp').controller('orderListController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window', 
	function($scope, $rootScope, $location, $timeout, $http,$window) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.fileInfo = {};
			$scope.getOrderInfo = function(){

				$http({
					method:'get',
					url: 'api/order/details'
				}).then(function(response) {
					$scope.fileInfo = response.data.data;				
				}, function(response) {
					console.log(response);
				});
			}

			$scope.getOrderInfo();

		});
	}]);