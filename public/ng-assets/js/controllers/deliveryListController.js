angular.module('EcommerceApp').controller('deliveryListController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window', 
	function($scope, $rootScope, $location, $timeout, $http,$window) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.fileInfo = {};
			$scope.getOrderInfo = function(){

				$http({
					method:'get',
					url: 'api/delivery/pending'
				}).then(function(response) {
					$scope.fileInfo = response.data.data;				
				}, function(response) {
					console.log(response);
				});
			}

			
			$scope.deliveryDone = function(id_order_list)
			{
				$http({
					method:'get',
					url:'api/deliveryDone/'+ id_order_list
				}).then(function(response) {
					//$scope.editProductData = response.data.data;
					$location.path("/deliveryDoneList");
					
					
				}, function(response) {
					console.log(response);
				});
			}

			$scope.getOrderInfo();

		});
	}]);