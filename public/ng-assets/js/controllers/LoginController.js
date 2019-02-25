/* Setup blank page controller */
angular.module('EcommerceApp').controller('LoginController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {


        //Create User Account
        $scope.loginCheck = function(){


        	$http({
        		method: 'post',
        		url: 'api/login',
        		data:$scope.loginInfo
        	}).then(function (response) {
        		$scope.loginInfo= null;
        		$scope.loginForm.$setPristine();
        		localStorage.setItem('token', response.data.token);
        		$rootScope.token = localStorage.getItem('token');
        		swal({
        			title: 'Success!',
        			text: 'LoggedIn Successfully.',
        			type: 'success'
        		}, function () {

        			$location.path("/product");

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
