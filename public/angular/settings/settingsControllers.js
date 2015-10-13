var settingsApp = angular.module("settingsApp", ['ngRoute']);
settingsApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

settingsApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider.

        when('/frequency', {
            templateUrl: 'frequency.htm',
            controller: 'frequencyController'
        }).

        when('/columns', {
            templateUrl: 'columns.htm',
            controller: 'columnsController'
        }).

        otherwise({
            redirectTo: '/frequency'
        });
}]);

settingsApp.controller('frequencyController', function($scope) {
    $scope.message = "Hellowfa";
});

settingsApp.controller('columnsController', function($scope) {
    $scope.message = "Hellowfsdvsgba";
});