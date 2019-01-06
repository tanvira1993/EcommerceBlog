/***
GLobal Directives
***/

// Route State Load Spinner(used on page or content load)
EcommerceApp.directive('ngSpinnerBar', ['$rootScope', '$state',
    function($rootScope, $state) {
        return {
            link: function(scope, element, attrs) {
                // by defult hide the spinner bar
                element.addClass('hide'); // hide spinner bar by default

                // display the spinner bar whenever the route changes(the content part started loading)
                $rootScope.$on('$stateChangeStart', function() {
                    element.removeClass('hide'); // show spinner bar
                });

                // hide the spinner bar on rounte change success(after the content loaded)
                $rootScope.$on('$stateChangeSuccess', function(event) {
                    element.addClass('hide'); // hide spinner bar
                    $('body').removeClass('page-on-load'); // remove page loading indicator
                    Layout.setAngularJsSidebarMenuActiveLink('match', null, event.currentScope.$state); // activate selected link in the sidebar menu

                    // auto scorll to page top
                    setTimeout(function () {
                        App.scrollTop(); // scroll to the top on content load
                    }, $rootScope.settings.layout.pageAutoScrollOnLoad);
                });

                // handle errors
                $rootScope.$on('$stateNotFound', function() {
                    element.addClass('hide'); // hide spinner bar
                });

                // handle errors
                $rootScope.$on('$stateChangeError', function() {
                    element.addClass('hide'); // hide spinner bar
                });
            }
        };
    }
    ])

// Handle global LINK click
EcommerceApp.directive('a', function() {
    return {
        restrict: 'E',
        link: function(scope, elem, attrs) {
            if (attrs.ngClick || attrs.href === '' || attrs.href === '#') {
                elem.on('click', function(e) {
                    e.preventDefault(); // prevent link click for above criteria
                });
            }
        }
    };
});

// Handle Dropdown Hover Plugin Integration
EcommerceApp.directive('dropdownMenuHover', function () {
    return {
        link: function (scope, elem) {
            elem.dropdownHover();
        }
    };
});

EcommerceApp.directive('bindHtmlCompile', ['$compile', function ($compile) {
    'use strict';
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            scope.$watch(function () {
                return scope.$eval(attrs.bindHtmlCompile);
            }, function (value) {
                element.html(value);
                $compile(element.contents())(scope);
            });
        }
    };
}]);

EcommerceApp.filter('trusted', ['$sce', function ($sce) {
    return function (text) {
        return $sce.trustAsHtml(text);
    };
}]);

EcommerceApp.filter('converter', ['$filter', function ($filter) {
    return function (input, column) {

        if (column.filters == "" || column.filters == undefined || column.filters == null) {
            return input;
        } else {
            var filters = column.filters.split(" ");
            filters.forEach(function (filter, i) {
                input = $filter(filter)(input);
            });
            return input;
        }
    };
}]);


EcommerceApp.directive('stickyTableHeader', [function () {
    return {
        restrict: 'A',
        scope: {
            active: '=active',
        },
        link: function ($scope, iElm, iAttrs, controller) {
            if (!$scope.active) {
                return;
            }
            var tableHeight = 0;
            var theadHeight = 0;
            var tableStartPoint = 0;
            var tableEndPoint = 0;
            var scrollTop = 0;
            var scrollLeft = 0;
            var offsetLeft = 0;

            $('.table-scrollable').scroll(function (e) {
                scrollLeft = $(this).scrollLeft();
                offsetLeft = $(this).offset().left
                $(iElm).closest('thead').css({
                    left: (offsetLeft - scrollLeft) + 'px'
                });
            });

            $(window).scroll(function (e) {
                scrollTop = $(this).scrollTop();
                previousScrollTop = scrollTop;
                tableHeight = $(iElm).closest('table').height();
                !theadHeight && (theadHeight = $(iElm).height());// jshint ignore:line
                !tableStartPoint && (tableStartPoint = $(iElm).offset().top - theadHeight);// jshint ignore:line
                tableEndPoint = tableStartPoint + $(iElm).closest('table').height();
                var columnWidth = [];
                var $el = $('table > thead:first');
                var isPositionFixed = ($el.css('position') === 'fixed');
                if ((scrollTop > tableStartPoint && scrollTop < tableEndPoint) && !isPositionFixed) {
                    if (!columnWidth.length) {
                        $('thead:first th').each(function (index, el) {
                            columnWidth.push($(this).outerWidth());
                        });
                    }
                    $.each(columnWidth, function (index, val) {
                        $('th,td').eq(index).css({
                            'min-width': val,
                            'max-width': val
                        });
                        $('tbody td').eq(index).css({
                            'min-width': val,
                            'max-width': val
                        });
                    });
                    $el.css({
                        'position': 'fixed',
                        'width': ($('.table.table-striped.table-bordered.table-hover').first().outerWidth()) + 'px',
                        'top': '50px',
                        'background': '#ffffff',
                        'z-index': 10
                    });
                }
                if ((scrollTop < tableStartPoint || scrollTop > tableEndPoint) && isPositionFixed) {
                    $el.css({ 'position': '', 'width': '', 'top': '', 'background': '', 'z-index': '' });
                }
            });
        }
    };
}]);


EcommerceApp.directive('myTable', function () {
    'use strict';
    /*jshint unused: false, undef:false */
    return {
        restrict: 'AEC',
        scope: {
            filterData: '=filter',
            relatedFunctions: '=functions'
        },
        controller: ['$scope', '$http', '$timeout', function ($scope, $http, $timeout) {
            $scope.filter = {};

            var setDefault = function () {
                $scope.tableData = angular.copy($scope.filterData);
                $.extend(true, $scope, $scope.relatedFunctions);

                if (!$scope.tableData.columns || $scope.tableData.columns.length === 0) {
                    console.error('MyTable: You must define at least 1 column');
                    return false;
                }

                if (!$scope.tableData.dataUrl) {
                    console.error('MyTable: You must define a back end URL');
                    return false;
                }

                $scope.tableDataFinal = {
                    'dataUrl': $scope.tableData.dataUrl,
                    'tableClass': !!$scope.tableData.tableClass ? $scope.tableData.tableClass : '',
                    'defaultOrderBy': !!$scope.tableData.defaultOrderBy ? $scope.tableData.defaultOrderBy : $scope.tableData.columns[0].key,
                    'defaultOrderType': !!$scope.tableData.defaultOrderType ? $scope.tableData.defaultOrderType : 'desc',
                    'globalSearch': !!$scope.tableData.globalSearch,
                    'pagination': !!$scope.tableData.pagination,
                    'paginationDropDown': !!$scope.tableData.paginationDropDown,
                    'defaultLimit': !!$scope.tableData.defaultLimit ? $scope.tableData.defaultLimit : 5,
                    'defaultOffset': !!$scope.tableData.defaultOffset ? $scope.tableData.defaultOffset : 0,
                    'loader': !!$scope.tableData.loader,
                    'paginationDropDownValues': !!$scope.tableData.paginationDropDownValues ? $scope.tableData.paginationDropDownValues : { '5': 5, '10': 10, '20': 20, '50': 50, 'ALL': '' },
                    'columnSelectable': !!$scope.tableData.columnSelectable,
                    'showSerialNumber': !!$scope.tableData.showSerialNumber,
                    'httpSuccessCallback': !!$scope.tableData.httpSuccessCallback ? $scope.tableData.httpSuccessCallback : function () { },
                    'httpErrorCallback': !!$scope.tableData.httpErrorCallback ? $scope.tableData.httpErrorCallback : function () { },
                    'stickyHeader': !!$scope.tableData.stickyHeader
                };

                $scope.tableDataFinal.columns = [];

                $scope.tableData.columns.forEach(function (val, index) {
                    $scope.tableDataFinal.columns[index] =
                    {
                        'key': val.key,
                        'alias': !!val.alias ? val.alias : val.key,
                        'columnType': !!val.columnType ? val.columnType : 'text',
                        'searchComparisons': !!val.searchComparisons ? val.searchComparisons : '*',
                        'rangeSearch': !!val.rangeSearch,
                        'searchable': typeof (val.searchable) === 'undefined' || val.searchable === true ? true : false,
                        'sortable': typeof (val.sortable) === 'undefined' || val.sortable === true ? true : false,
                        'hasHtml': !!val.hasHtml,
                        'hasHtmlValue': !!val.hasHtmlValue,
                        'htmlValue': val.htmlValue ? val.htmlValue : '',
                        'thStyle': !val.thStyle ? '' : val.thStyle,
                        'thWidth': !!val.thWidth ? val.thWidth : '',
                        'showComparison': typeof (val.showComparison) === 'undefined' ? true : val.showComparison,
                        'visible': true,
                        'selectOptions': !!val.selectOptions ? val.selectOptions : [],
                        'filters': !!val.filters ? val.filters : ""
                    };
                });
                //

                $scope.tableData = $scope.tableDataFinal;

                init();
            };

            setDefault();

            function init() {
                $scope.filter = {
                    limit: $scope.tableData.defaultLimit,
                    offset: $scope.tableData.defaultOffset,
                    orderBy: $scope.tableData.defaultOrderBy,
                    orderType: $scope.tableData.defaultOrderType,
                    globalSearch: '',
                    loading: $scope.tableData.loader,
                    columns: {}
                };
                $.each($scope.tableData.columns, function (index, val) {
                    if (!val.rangeSearch) {
                        $scope.filter.columns[val.key] = [{
                            filterType: 'like',
                            filterValue: ''
                        }];
                    }
                    else {
                        $scope.filter.columns[val.key] = [{
                            filterType: '>',
                            filterValue: ''
                        },
                        {
                            filterType: '<',
                            filterValue: ''
                        }];
                    }
                });
                //select default to first option
                $scope.filter.limit = '' + ($scope.tableData.paginationDropDownValues[Object.keys($scope.tableData.paginationDropDownValues)[0]]);
            }


            $scope.dataCount = 0;
            $scope.allData = [];

            var timer = 0;
            $scope.getallData = function (resetOffset) {
                if (resetOffset) {
                    $scope.filter.offset = 0;
                }
                $timeout.cancel(timer);
                $scope.tableData.loading = true;
                timer = $timeout(function () {
                    $scope.getallDataMain();
                }, 600);
            };

            $scope.getallDataMain = function () {
                $http({
                    method: 'post',
                    url: $scope.tableData.dataUrl,
                    data: $scope.filter,
                })
                .success(function (data) {
                    $scope.dataCount = data.data.count;
                    $scope.allData = data.data.data;
                    $scope.selectedPagination = Math.ceil((1 + $scope.filter.offset * 1) / $scope.filter.limit);
                    var total = 0;
                    if (parseInt($scope.filter.limit) != 0) {
                        total = Math.ceil(($scope.dataCount / parseInt($scope.filter.limit)));
                    }
                    $scope.noOfPaginationCount = total;
                    createPagination(total);
                    $scope.tableData.loading = false;
                    $scope.tableDataFinal.httpSuccessCallback(data);

                        //For Sticky Header
                        if ($scope.tableDataFinal.stickyHeader) {
                            $(".page-sidebar").css('padding-bottom', '0px');
                            setTimeout(function () {
                                var newPadding = $(document).height() - ($(".page-sidebar-menu").offset().top + $(".page-sidebar-menu").height() + 80);
                                $(".page-sidebar").css('padding-bottom', newPadding + 'px');
                            }, 1000)
                        }
                    })
                .error(function (data) {
                    $scope.tableData.loading = false;
                    $scope.tableDataFinal.httpErrorCallback(data);
                });
            };

            $scope.selectedPagination = 1;
            var noOfPaginationButton = 7;
            $scope.pagination = [];
            var createPagination = function (noOfPagination) {
                $scope.pagination = [];

                if (noOfPagination === 1) {
                    $scope.pagination[0] = 1;
                    return;
                }

                if (noOfPagination <= 7) {
                    for (var i = 1; i <= noOfPagination; i++) {
                        $scope.pagination.push(i);
                    }
                }
                else {
                    if (noOfPagination - $scope.selectedPagination <= 3) {
                        for (var i = noOfPagination; i >= (noOfPagination - 5); i--) {
                            $scope.pagination.push(i);
                        }
                    }
                    else if ($scope.selectedPagination <= 3) {
                        for (var i = 1; i <= 5; i++) {
                            $scope.pagination.push(i);
                        }
                    }
                    else {
                        for (var i = $scope.selectedPagination - 3; i <= $scope.selectedPagination + 3; i++) {
                            $scope.pagination.push(i);
                        };
                    }
                }
            };

            $scope.changePagination = function (offset) {
                $scope.nextDisabled = false;
                $scope.prevDisabled = false;
                if (offset === $scope.noOfPaginationCount - 1) {
                    $scope.nextDisabled = true;
                }
                if (offset === 0) {
                    $scope.prevDisabled = true;
                }
                $scope.selectedPagination = offset + 1;
                $scope.filter.offset = $scope.filter.limit * offset;
                $scope.getallData();
            };

            $scope.changePaginationNext = function (offset) {
                $scope.nextDisabled = false;
                $scope.prevDisabled = false;
                if (offset + 1 === $scope.noOfPaginationCount) {
                    $scope.nextDisabled = true;
                }
                $scope.selectedPagination = $scope.selectedPagination + 1;
                $scope.filter.offset = $scope.filter.limit * offset;
                $scope.getallData();
            };

            $scope.changePaginationPrevious = function (offset) {
                $scope.nextDisabled = false;
                $scope.prevDisabled = false;
                if (offset === 2) {
                    $scope.prevDisabled = true;
                }
                $scope.selectedPagination = $scope.selectedPagination - 1;
                $scope.filter.offset = $scope.filter.limit * ($scope.selectedPagination - 1);
                $scope.getallData();
            };

            $scope.sortBy = function (columnName) {
                $scope.selectedPagination = 1;
                noOfPaginationButton = 7;
                $scope.filter.offset = 0;
                $scope.filter.orderBy = columnName;
                $scope.filter.orderType = $scope.filter.orderType === 'asc' ? 'desc' : 'asc';
                $scope.getallData();
            };

            $scope.prepareHtml = function (returnData, columnData) {
                var html = columnData.htmlValue;
                $.each(returnData, function (index, val) {
                    var searchString = '{{' + index + '}}';
                    html = html.replace(new RegExp(searchString, 'g'), val);
                });
                return html;
            };

            if (typeof ($scope.relatedFunctions) !== 'undefined') {
                $scope.relatedFunctions.reloadMyTable = function (additionalPostData) {
                    if (typeof (additionalPostData) != 'undefined') {
                        $scope.filter.additionalPostData = additionalPostData;
                    }
                    else {
                        $scope.filter.additionalPostData = {};
                    }
                    $scope.getallData();
                };
            }

            $scope.getallData();

            //For exporting data to CSV

            var exportToCsv = function (filename, rows) {
                var processRow = function (row) {
                    var finalVal = '';
                    for (var j = 0; j < row.length; j++) {
                        var innerValue = row[j] === null || row[j] === undefined ? '' : row[j].toString();
                        if (row[j] instanceof Date) {
                            innerValue = row[j].toLocaleString();
                        };
                        var result = innerValue.replace(/"/g, '""');
                        if (result.search(/("|,|\n)/g) >= 0)
                            result = '"' + result + '"';
                        if (j > 0)
                            finalVal += ',';
                        finalVal += result;
                    }
                    return finalVal + '\n';
                };

                var csvFile = '';
                for (var i = 0; i < rows.length; i++) {
                    csvFile += processRow(rows[i]);
                }

                var blob = new Blob([csvFile], { type: 'text/csv;charset=utf-8;' });
                if (navigator.msSaveBlob) { // IE 10+
                    navigator.msSaveBlob(blob, filename);
                } else {
                    var link = document.createElement("a");
                    if (link.download !== undefined) { // feature detection
                        // Browsers that support HTML5 download attribute
                        var url = URL.createObjectURL(blob);
                        link.setAttribute("href", url);
                        link.setAttribute("download", filename);
                        link.style.visibility = 'hidden';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    }
                }
            }

            $scope.print = function () {
                window.print();
            }

            $scope.exportData = function () {

                $scope.currentData = [];
                var headers = [];

                $.each($scope.tableData.columns, function (index, val) {
                    if (!val.hasHtml && !val.hasHtmlValue) {
                        headers.push(val.alias);
                    }
                });

                $scope.currentData.push(headers);

                $.each($scope.allData, function (i, v) {
                    var rows = [];
                    $.each($scope.tableData.columns, function (index, val) {
                        if (!val.hasHtml && !val.hasHtmlValue) {
                            rows.push(v[val.key]);
                        }
                    });
                    $scope.currentData.push(rows);
                });

                exportToCsv('My Data.csv', $scope.currentData);
            };

            //For exporting data to CSV Done

        }],
        templateUrl: function (elem, attr) {
            return 'ng-assets/js/my-table.html';
        }
    };
});

