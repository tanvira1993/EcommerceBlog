/* Setup blank page controller */
angular.module('EcommerceApp').controller('adminRegController', ['$scope', '$rootScope', '$location', '$timeout', '$http',
	function($scope, $rootScope, $location, $timeout, $http) {
		$scope.$on('$viewContentLoaded', function() {

        //Create Admin Account
        $scope.createAdmin = function(){

        	
        	$http({
        		method: 'post',
        		url: 'api/createAdmin',
        		data:$scope.adminInfo
        	}).then(function (response) {
        		$scope.adminInfo=null;
        		$scope.adminRegistrationForm.$setPristine();
        		
        		swal({
        			title: 'Success!',
        			text: 'Admin Account Created Successfully.',
        			type: 'success'
        		}, function () {
        			
        			$location.path("/login");

        			if (!$scope.$$phase)
        				$scope.$apply();
        		});

        	}, function (response) {

        		swal({
        			title: response.data.heading,
        			text: response.data.message,
        			html:true,
        			type: 'error'
        		});
        	});
        }
    });
	}]);
