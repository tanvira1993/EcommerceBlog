/* Setup blank page controller */
angular.module('EcommerceApp').controller('manageAllproductController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });
	$scope.getAllFileInfo = function(){

		$http({
			method:'get',
			url: 'api/allproductInfo/manage'
		}).then(function(response) {
			$scope.fileInfo = response.data.data;				
		}, function(response) {
			console.log(response);
		});
	}
	$scope.getAllFileInfo();
}]);
