angular.module('EcommerceApp').controller('orderListController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window','$stateParams', 
	function($scope, $rootScope, $location, $timeout, $http,$window,$stateParams) {
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


			$scope.deliveryQueue = function(id_order_list)
			{
				$http({
					method:'get',
					url:'api/productdeliveryqueue/'+ id_order_list
				}).then(function(response) {
					//$scope.editProductData = response.data.data;
					$location.path("/deliverylist");
					
					
				}, function(response) {
					console.log(response);
				});
			}

			$scope.getOrderInfo();

		});
	}]);