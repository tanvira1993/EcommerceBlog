/***
Metronic AngularJS App Main Script
***/

/* Metronic App */
var EcommerceApp = angular.module("EcommerceApp", [
	"ui.router",
	//"ui.bootstrap",
	"oc.lazyLoad",
	//"ngSanitize"
	]);

/* Configure ocLazyLoader(refer: https://github.com/ocombe/ocLazyLoad) */
/*LcApp.config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
	$ocLazyLoadProvider.config({
        // global configs go here
    });
}]);
*/

//AngularJS v1.3.x workaround for old style controller declarition in HTML
/*LcApp.config(['$controllerProvider', function($controllerProvider) {
    // this option might be handy for migrating old apps, but please don't use it
    // // in new ones!
    $controllerProvider.allowGlobals();
}]);
*/
/********************************************
 END: BREAKING CHANGE in AngularJS v1.3.x:
 *********************************************/


/*===============================================
=            custom http interceptor            =
===============================================*/
EcommerceApp.config(['$httpProvider', function($httpProvider) {
	$httpProvider.interceptors.push('MaxInterceptor');
	//   $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
}]);


/*============================================
=            localstorage service            =
============================================*/
/*LcApp.factory('LocalStorageService', ['$window', function ($window) {
	return {
		set: function(key, data) {
			$window.localStorage.setItem(key,JSON.stringify(data));
		},
		get: function(key) {
			return JSON.parse($window.localStorage.getItem(key));
		},
		remove: function(key) {
			$window.localStorage.removeItem(key);
		}
	};
}]);
*//*=====  End of localstorage service  ======*/

EcommerceApp.factory('MaxInterceptor', ['$rootScope','$q', function ($rootScope,$q) {
	var interceptor = {
		request: function(config) {
			config.headers['Content-Type'] = 'application/x-www-form-urlencoded';
			if (!!$rootScope.token) {
				config.headers.Token = 'Bearer '+ 'kochu '+$rootScope.token;
				config.headers.idUser = $rootScope.idUser;
				config.headers.idUserRole = $rootScope.idUserRole;

			}

			if (config.method === 'POST') {
				config.data = $.param(config.data);
			}
			return config;
		},
		response: function(response) {
			return response;
		},
		responseError: function(response, error) {
			/*var redirectUrl = $rootScope.CURRENT_API;
			redirectUrl = window.btoa(redirectUrl);
			redirectUrl = encodeURIComponent(redirectUrl);
			console.log('Response : ', response, 'error : ',error);
			if (response.status === 401) {
				if (response.statusText.toLowerCase() === 'unauthorized') {
					window.localStorage.removeItem('MyToken');
					window.localStorage.removeItem('userInfo');
					window.location.href = CURRENT_LOGIN+'login/index/'+redirectUrl;
				}
			}*/

			return $q.reject(response);
		}
	};
	return interceptor;
}]);
//
/*=====  End of custom http interceptor  ======*/


/* Setup global settings */
/*LcApp.factory('settings', ['$rootScope', function($rootScope) {
    // supported languages
    var settings = {
    	layout: {
            pageSidebarClosed: false, // sidebar menu state
            pageContentWhite: true, // set page content layout
            pageBodySolid: false, // solid body color state
            pageAutoScrollOnLoad: 1000 // auto scroll to top on page load
        },
        assetsPath: CURRENT_ASSET+'assets',
        globalPath: CURRENT_ASSET+'assets/global',
        layoutPath: CURRENT_ASSET+'assets/layouts/layout3',
    };

    $rootScope.settings = settings;

    return settings;
}]);
*/
/* Setup App Main Controller */
EcommerceApp.controller('AppController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams',function($scope, $rootScope, $location, $timeout, $http,$stateParams) {
	$scope.$on('$viewContentLoaded', function() {
        // App.initComponents(); // init core components
        //Layout.init(); //  Init entire layout(header, footer, sidebar, etc) on page load if the partials included in server side instead of loading with ng-include directive
    });
}]);


/***
Layout Partials.
By default the partials are loaded through AngularJS ng-include directive. In case they loaded in server side(e.g: PHP include function) then below partial
initialization can be disabled and Layout.init() should be called on page load complete as explained above.
***/

/* Setup Layout Part - Header */
/*LcApp.controller('HeaderController', ['$scope', function($scope) {
	$scope.$on('$includeContentLoaded', function() {
        Layout.initHeader(); // init header
    });
}]);
*/
/* Setup Layout Part - Sidebar */
/*LcApp.controller('SidebarController', ['$state', '$scope', function($state, $scope) {
	$scope.$on('$includeContentLoaded', function() {
        Layout.initSidebar($state); // init sidebar
    });
}]);
*/
/* Setup Layout Part - Sidebar */
/*LcApp.controller('PageHeadController', ['$scope', function($scope) {
	$scope.$on('$includeContentLoaded', function() {
        Demo.init(); // init theme panel
    });
}]);
*/
/* Setup Layout Part - Quick Sidebar */
/*LcApp.controller('QuickSidebarController', ['$scope', function($scope) {
	$scope.$on('$includeContentLoaded', function() {
		setTimeout(function(){
            QuickSidebar.init(); // init quick sidebar
        }, 2000)
	});
}]);
*/
/* Setup Layout Part - Theme Panel */
/*LcApp.controller('ThemePanelController', ['$scope', function($scope) {
	$scope.$on('$includeContentLoaded', function() {
        Demo.init(); // init theme panel
    });
}]);
*/
/* Setup Layout Part - Footer */
/*LcApp.controller('FooterController', ['$scope', function($scope) {
	$scope.$on('$includeContentLoaded', function() {
        Layout.initFooter(); // init footer
    });
}]);
*/
/* Init global settings and run the app */
EcommerceApp.run(['$rootScope', '$http','$state','$window', '$filter', '$location',function($rootScope, $http, $state,$window, $filter,$location) {
	$rootScope.token = localStorage.getItem('token');
	$rootScope.idUser = localStorage.getItem('idUser');
	$rootScope.idUserRole= localStorage.getItem('idUserRole');
	$rootScope.cartItem = localStorage.getItem('products');
	$rootScope.cartItem = $rootScope.cartItem!=null && $rootScope.cartItem.length ? $.parseJSON($rootScope.cartItem) : [];



	$rootScope.deleteCart = function(index){
		$window.alert(index+1 +' No Product Already deleted!');
		$rootScope.cart=[];
		$rootScope.cart=$.parseJSON(localStorage.getItem('products'));
		$rootScope.cart.splice(index,1);
		$rootScope.getTotal();
		localStorage.setItem('products', JSON.stringify($rootScope.cart));

		$rootScope.cartItem=localStorage.getItem('products');
		$rootScope.cartItem = $rootScope.cartItem.length ? $.parseJSON($rootScope.cartItem) : $rootScope.cartItem;
		$window.location.reload("/product");

	}

	$rootScope.category = function(){

		$http({
			method:'get',
			url: 'api/categoryInfo'
		}).then(function(response) {
			$rootScope.categoryInfo = response.data.data;               
		}, function(response) {
			console.log(response);
		});
	}

	$rootScope.subCategory = function(){

		$http({
			method:'get',
			url: 'api/subCategoryInfo'
		}).then(function(response) {
			$rootScope.subCategoryInfo = response.data.data;  
			console.log($rootScope.subCategoryInfo);             
		}, function(response) {
			console.log(response);
		});
	}

	$rootScope.getTotal = function(){
		$rootScope.total = 0;
		$.each($rootScope.cartItem, function(index,val){
			$rootScope.total += val.quantity*val.productCost;
		});
	}

	$rootScope.category();
	$rootScope.subCategory();
	$rootScope.getTotal();
	$rootScope.getSubCategories = function (idCategory) {
		return $filter('filter')($rootScope.subCategoryInfo, function (elm) {
			if (elm.id_categories == idCategory) 
				return elm;
		} )
	}

	$rootScope.logout = function(){

		window.location.href = 'login/logout/';
	}

	$rootScope.orderCreate = function(){

				// var productsList = JSON.parse(localStorage.getItem('products'));
				if($rootScope.idUserRole== 0){

					$http({
						method:'post',					
						url: 'api/product/addcart',

						data: $rootScope.createorder
					}).then(function (response) {
					//hide_all_toastr();
					//$scope.chargeForm.$setPristine();

					swal({
						title: 'Success!',
						text: 'Order Created Successfuly.',
						type: 'success'
					}, function () {

                //Charge model data initialize
                if($rootScope.idUserRole== 1 || $rootScope.idUserRole==2){
                	$location.path("/orderlist");
                }

                if($rootScope.idUserRole== 0){
                	$location.path("/userOrderList");
                }
                
                if (!$rootScope.$$phase)
                	$rootScope.$apply();
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

				else
				{
					toastr.error("Login First")

				}

			}
		}]);
/*
    $rootScope.$state = $state; // state to be accessed from view
    $rootScope.$settings = settings; // state to be accessed from view

    $rootScope.CURRENT_API  = window.CURRENT_API;
    $rootScope.CURRENT_API_DATA  = window.CURRENT_API_DATA;
    $rootScope.CURRENT_LOGIN  = window.CURRENT_LOGIN;
    $rootScope.CURRENT_ASSET  = window.CURRENT_ASSET;
    $rootScope.CURRENT_REQ = window.CURRENT_REQ;

    $rootScope.jwt = LocalStorageService.get('MyToken');

    $rootScope.getUserInfo  =  function () {
    	var token = JSON.parse(window.localStorage.getItem('MyToken'));
    	var url = '';

    	if (token !== null) {
    		url = $rootScope.CURRENT_API_DATA +'api/user/current';

    		$http({
    			method: 'GET',
    			url: url
    		})
    		.success(function(data) {
    			$rootScope.userInformation = data;
    		}).error(function(data) {
    			console.log(data);
    		});
    	}
    };
    $rootScope.getUserInfo ();

    $rootScope.$on('$stateChangeError', function (event, toState, toParams, fromState, fromParams, error) {
    	var redirectUrl = $rootScope.CURRENT_API;
    	redirectUrl = window.btoa(redirectUrl);
    	redirectUrl = encodeURIComponent(redirectUrl);

    	$rootScope.jwt = LocalStorageService.get('MyToken');

    	if (!$rootScope.jwt){
    		window.location.href = CURRENT_LOGIN+'login/index/'+redirectUrl;
    	}
    	// else if (!$rootScope.userInfo) {
    	// 	$state.go('role',{ 'error':'403_1','target':toState.name});
    	// }
    	// else if(error==401){
    	// 	window.location.href = CURRENT_LOGIN+'login/index/'+redirectUrl;
    	// }
    	// else if(error==403){
    	// 	$state.go('role',{ 'error':'403_2','target':toState.name});
    	// }
/*    });

}]);
*/