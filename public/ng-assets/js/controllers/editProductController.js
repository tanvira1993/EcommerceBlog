/* Setup blank page controller */
angular.module('EcommerceApp').controller('editProductController', ['$scope', '$rootScope', '$location', '$timeout', '$http', '$stateParams',
	function($scope, $rootScope, $location, $timeout, $http,$stateParams) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.id = $stateParams.id;			
			//$scope.editProductData=[];

			$scope.getProductDetailsById = function(id){

				$http({
					method:'get',
					url:'api/productdetailById/'+$scope.id
				}).then(function(response) {
					$scope.editProductData = response.data.data;
					
				}, function(response) {
					console.log(response);
				});
			}


			$scope.updateOtherDocument = function(){
				let formData = new FormData($("#editotherDocumentForm")[0]);

				$.ajax({
					url: 'api/product/update/' +$scope.id,
					type: 'POST',
					data: formData,
					headers: {
						'Token' : 'Bearer '+ 'kochu '+$rootScope.token,
						'idUser' : $rootScope.idUser,
						'idUserRole' : $rootScope.idUserRole

					},
					success: (response)=> {
					//show_toastr("success","Success","other Documents Successfully Created.");
					toastr.success("Product Added Successfully.")

					$location.path("/manageProduct");
					if (!$scope.$$phase)
						$scope.$apply();

				},
				error: function(xhr) {
					let response = JSON.parse(xhr.responseText);
					console.log(response);
					toastr.error(response.message == undefined ? "contact Admin" : response.message)
					
					//show_toastr("error",response.heading,(response.message==undefined?"":response.message));
				},
				cache: false,
				contentType: false,
				processData: false
			});
			}


			$scope.getProductDetailsById();
		});
	}]);
