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
					url: 'api/productInfo/detailsbyid/' +id 
				}).then(function(response) {
					//$window.alert(id +' selected');
					$scope.productCart=  response.data.data;

				}, function(response) {
					console.log(response);
				});
			}


			$scope.saveOrder = function(){

				$http({
					method:'post',
					url: 'api/product/addcart',

					data: $scope.productCart
				}).then(function (response) {
					//hide_all_toastr();
					//$scope.chargeForm.$setPristine();

					swal({
						title: 'Success!',
						text: 'Charge Created Successfuly.',
						type: 'success'
					}, function () {

                //Charge model data initialize
                
                $location.path("/orderlist");
                if (!$scope.$$phase)
                	$scope.$apply();
            });

				}, function (response) {
					//hide_all_toastr();
					swal({
						title: response.data.heading,
						text: response.data.message,
						html: true,
						type: 'error'
					});
				});
			}



			$scope.getFileInfo();


		});
	}]);
