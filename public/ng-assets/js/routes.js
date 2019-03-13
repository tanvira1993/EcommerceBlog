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
        controller: "LoginController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/LoginController.js'
                    ]
                });
            }]
        }
    })



    .state('userreg', {
        url: "/userreg",
        templateUrl: "/userreg",
        data: {pageTitle: 'registration Form'},
        controller: "userRegController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/userRegController.js'
                    ]
                });
            }]
        }
    })

    .state('adminreg', {
        url: "/adminreg",
        templateUrl: "/adminreg",
        data: {pageTitle: 'registration Form'},
        controller: "adminRegController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/adminRegController.js'
                    ]
                });
            }]
        }
    })


    //user order status
    .state('userOrderList', {
        url: "/userOrderList",
        templateUrl: "/userOrderList",
        data: {pageTitle: 'Order List'},
        controller: "userOrderListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/userOrderListController.js'
                    ]
                });
            }]
        }
    })

    .state('userDeliveryPendingList', {
        url: "/userDeliveryPendingList",
        templateUrl: "/userDeliveryPendingList",
        data: {pageTitle: 'Delivery Pending List'},
        controller: "userDeliveryPendingListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/userDeliveryPendingListController.js'
                    ]
                });
            }]
        }
    })

    .state('userDeliveryDoneList', {
        url: "/userDeliveryDoneList",
        templateUrl: "/userDeliveryDoneList",
        data: {pageTitle: 'Delivery Done List'},
        controller: "userDeliveryDoneListController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/userDeliveryDoneListController.js'
                    ]
                });
            }]
        }
    })

    .state('categories', {
        url: "/categories",
        templateUrl: "/categories",
        data: {pageTitle: 'Categories List'},
        controller: "categoriesSetController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/categoriesSetController.js'
                    ]
                });
            }]
        }
    })

    .state('subCategories', {
        url: "/subCategories",
        templateUrl: "/subCategories",
        data: {pageTitle: 'Sub Categories List'},
        controller: "setCategoriesSetController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/setCategoriesSetController.js'
                    ]
                });
            }]
        }
    })

    
    .state('searchProduct', {
        url: "/searchProduct/{id}",
        templateUrl: "/searchProduct",
        data: {pageTitle: 'Searched Categories'},
        controller: "searchcategoryController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-assets/js/controllers/searchcategoryController.js'
                    ]
                });
            }]
        }
    })

}]);
