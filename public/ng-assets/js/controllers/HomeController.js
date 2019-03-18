/* Setup blank page controller */
angular.module('EcommerceApp').controller('HomeController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$window',
	function($scope, $rootScope, $location, $timeout, $http,$window) {
		$scope.$on('$viewContentLoaded', function() {
			
			//$scope.idUserRole= (localStorage.getItem('idUserRole'));
			//console.log((localStorage.getItem('idUserRole')));

			$rootScope.cartItem=localStorage.getItem('products');
			$rootScope.cartItem = $rootScope.cartItem!=null && $rootScope.cartItem.length ? $.parseJSON($rootScope.cartItem) : [];
			

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

			
			$rootScope.getTotal();


			$scope.addToCart = function(){

				if($rootScope.idUserRole== 0 || $rootScope.idUserRole== null){
					var objProduct = {
						"idProduct": $scope.productCart.id_products,
						"quantity": $scope.productCart.item_quantity,
						"adminId": $scope.productCart.id_users,
						"productName": $scope.productCart.product_name,
						"productCost": $scope.productCart.product_cost,
						"productPic": $scope.productCart.product_file
					};

					$rootScope.cartItem.push(objProduct);
					$rootScope.getTotal();
					localStorage.removeItem('products');
					localStorage.setItem('products', JSON.stringify($rootScope.cartItem));
					$rootScope.cartItem=localStorage.getItem('products');
					$rootScope.cartItem = $rootScope.cartItem.length ? $.parseJSON($rootScope.cartItem) : $rootScope.cartItem;

					toastr.success("Product added to cart")
				}

				
				else{
					toastr.error("Login First")
				}

			}


			$scope.getFileInfo();



		});
	}]);
