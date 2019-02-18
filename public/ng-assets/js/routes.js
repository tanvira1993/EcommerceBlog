/* Setup Rounting For All Pages */
EcommerceApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/product");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

    .state('EcommerceProduct', {
        url: "/product",
        templateUrl: "/product",
        data: {pageTitle: 'Ecommerce Product'},
        controller: "HomeController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/HomeController.js'
                    ]
                });
            }]
        }
    })

    
    .state('adminview', {
        url: "/admin",
        templateUrl: "/admin",
        data: {pageTitle: 'Add Product'},
        controller: "addProductController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/addProductController.js'
                    ]
                });
            }]
        }
    })
    
    .state('manageProduct', {
        url: "/manageProduct",
        templateUrl: "/manageProduct",
        data: {pageTitle: 'Manage Product'},
        controller: "manageProductController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/manageProductController.js'
                    ]
                });
            }]
        }
    })

    .state('editProduct', {
        url: "/product/edit/{id}",
        templateUrl: "/product/edit",
        data: {pageTitle: 'Manage Product'},
        controller: "editProductController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/editProductController.js'
                    ]
                });
            }]
        }
    })


    //
    .state('orderlist', {
        url: "/orderlist",
        templateUrl: "/orderlist",
        data: {pageTitle: 'Order List'},
        controller: "orderListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/orderListController.js'
                    ]
                });
            }]
        }
    })

    .state('deliverylist', {
        url: "/deliverylist",
        templateUrl: "/deliverylist",
        data: {pageTitle: 'Delivery Queue List'},
        controller: "deliveryListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/deliveryListController.js'
                    ]
                });
            }]
        }
    })

    .state('deliveryDoneList', {
        url: "/deliveryDoneList",
        templateUrl: "/deliveryDoneList",
        data: {pageTitle: 'Delivery Done List'},
        controller: "deliveryDoneListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/deliveryDoneListController.js'
                    ]
                });
            }]
        }
    })

    .state('login', {
        url: "/login",
        templateUrl: "/login",
        data: {pageTitle: 'Login Form'},
        controller: "BlankController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/BlankController.js'
                    ]
                });
            }]
        }
    })



    .state('userreg', {
        url: "/userreg",
        templateUrl: "/userreg",
        data: {pageTitle: 'registration Form'},
        controller: "BlankController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/BlankController.js'
                    ]
                });
            }]
        }
    })

    .state('adminreg', {
        url: "/adminreg",
        templateUrl: "/adminreg",
        data: {pageTitle: 'registration Form'},
        controller: "BlankController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/BlankController.js'
                    ]
                });
            }]
        }
    })

}]);
