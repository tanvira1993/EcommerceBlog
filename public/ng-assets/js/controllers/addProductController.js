/* Setup blank page controller */
angular.module('EcommerceApp').controller('addProductController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {


		$scope.saveOtherDocument = function(){
			let formData = new FormData($("#otherDocumentForm")[0]);

			$.ajax({
				url: $rootScope.CURRENT_API_DATA + 'api/other/documents/save',
				type: 'POST',
				data: formData,
				headers: {
					'Authorization':'Bearer '+$rootScope.jwt
				},
				success: (response)=> {
					//show_toastr("success","Success","other Documents Successfully Created.");
					$location.path("/product");
					if (!$scope.$$phase)
						$scope.$apply();

				},
				error: function(xhr) {
					let response = JSON.parse(xhr.responseText);
					console.log(response);
					//show_toastr("error",response.heading,(response.message==undefined?"":response.message));
				},
				cache: false,
				contentType: false,
				processData: false
			});
		}
	});
}]);
