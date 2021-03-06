/* Setup blank page controller */
angular.module('EcommerceApp').controller('addProductController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$filter', 
	function($scope, $rootScope, $location, $timeout, $http,$filter) {
		$scope.$on('$viewContentLoaded', function() {

			$scope.category = '';

			$scope.getSubCategoryList = function(category){
				$http({
					method:'get',
					url: 'api/subCategoryInfo/' +category
				}).then(function(response) {
					$scope.subCategorybycategory = response.data.data;  

				}, function(response) {
					console.log(response);
				});
				console.log(category);
			}

			$scope.saveOtherDocument = function(){
				let formData = new FormData($("#otherDocumentForm")[0]);

				$.ajax({
					url: 'api/other/documents/save',
					type: 'POST',
					data: formData,
					headers: {
						'Token' : 'Bearer '+ 'kochu '+$rootScope.token,
						'idUser' : $rootScope.idUser,
						'idUserRole' : $rootScope.idUserRole

					},
					success: (response)=> {

						toastr.success("Product Added Successfully.")
						$location.path("/product");
						if (!$scope.$$phase)
							$scope.$apply();

					},
					error: function(xhr) {
						let response = JSON.parse(xhr.responseText);
						console.log(response);

						toastr.error(response.message == undefined ? "contact Admin" : response.message)
					},
					cache: false,
					contentType: false,
					processData: false
				});
			}
		});
	}]);


