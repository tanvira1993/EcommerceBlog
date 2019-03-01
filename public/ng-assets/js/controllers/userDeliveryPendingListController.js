angular.module('EcommerceApp').controller('userDeliveryPendingListController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window','$stateParams', 
	function($scope, $rootScope, $location, $timeout, $http,$window,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.fileInfo = {};
			$scope.getUserdeliveryPendingInfo = function(){

				$http({
					method:'get',
					url: 'api/user/deliveryPending/details'
				}).then(function(response) {
					$scope.fileInfo = response.data.data;				
				}, function(response) {
					console.log(response);
				});
			}


			$scope.getUserdeliveryPendingInfo();

		});
	}]);