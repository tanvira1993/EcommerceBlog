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

}]);
