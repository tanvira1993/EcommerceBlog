/* Setup Rounting For All Pages */
EcommerceApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/product");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

/*    .state('otherDocumentEdit', {
        url: "/other/documents/edit/{id}",
        templateUrl: "/other/documents/edit",
        data: {pageTitle: 'Other Documents Edit'},
        controller: "otherDocumentsEditController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'EcommerceApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                        CURRENT_ASSET+'assets/global/plugins/select2/css/select2.min.css',
                        CURRENT_ASSET+'assets/global/plugins/select2/css/select2-bootstrap.min.css',
                        CURRENT_ASSET+'assets/global/plugins/select2/js/select2.full.js',
                        'ng-assets/js/controllers/otherDocumentsEditController.js'
                        ]
                    });
            }]
        }
    })*/

    
}]);
