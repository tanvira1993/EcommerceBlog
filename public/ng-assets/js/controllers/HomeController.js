/* Setup blank page controller */
angular.module('EcommerceApp').controller('HomeController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window', 
	function($scope, $rootScope, $location, $timeout, $http,$window) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.fileInfo = {};
			$scope.getFileInfo = function(){

				$http({
					method:'get',
					url: 'api/productInfo/details'
				}).then(function(response) {
					$scope.fileInfo = response.data.data;				
				}, function(response) {
					console.log(response);
				});
			}


			$scope.alert = function(id){

				$http({
					method:'get',
					url: 'api/productInfo/details'
				}).then(function(response) {
					$window.alert(id +' selected');				
				}, function(response) {
					console.log(response);
				});
			}



			$scope.getFileInfo();

		});
	}]);
