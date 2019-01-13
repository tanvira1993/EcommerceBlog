
/* Setup blank page controller */
angular.module('EcommerceApp').controller('manageProductController', ['$scope', '$rootScope', '$location', '$timeout', '$http', 
	function($scope, $rootScope, $location, $timeout, $http) {
		$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        
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

        $scope.deleteProduct = function(id){
        	swal({
        		title: "Are you sure?",
        		text: "You will not be able to recover this Product!",
        		type: "warning",
        		showCancelButton: true,
        		confirmButtonClass: "btn-danger",
        		confirmButtonText: "Yes, delete it!",
        		cancelButtonText: "No, cancel!",
        		CancelButtonClass: "btn-danger",
        		closeOnConfirm: false,
        		closeOnCancel: true
        	},
        	function(isConfirm) {
        		if (isConfirm) {

        			$http({
        				method:'delete',
        				url: 'api/product/delete/'+id
        			}).then(function(response) {
        				console.log(response);
        				$scope.getFileInfo();
        				swal("Deleted!", "Your Product has been deleted.", "success");

        			}, function(response) {
        				console.log(response);
        			});

        		} 
        	});


        }

        $scope.getFileInfo();

        // set default layout mode
        /*$rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;*/
    });
	}]);
