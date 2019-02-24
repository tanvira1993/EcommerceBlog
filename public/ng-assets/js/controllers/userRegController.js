/* Setup blank page controller */
angular.module('EcommerceApp').controller('userRegController', ['$scope', '$rootScope', '$location', '$timeout', '$http', 
	function($scope, $rootScope, $location, $timeout, $http) {
		$scope.$on('$viewContentLoaded', function() {
			

        	//Create User Account
        	$scope.createUser = function(){

        		
        		$http({
        			method: 'post',
        			url: 'api/createUser',
        			data:$scope.userInfo
        		}).then(function (response) {
        			$scope.userInfo=null;        			
        			$scope.userRegistrationForm.$setPristine();

        			swal({
        				title: 'Success!',
        				text: 'Account Created Successfully.',
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
