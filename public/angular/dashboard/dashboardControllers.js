var dashboardApp = angular.module("dashboardApp", ['ngRoute']);

dashboardApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

dashboardApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider.

        when('/access', {
            templateUrl: 'access.htm',
            controller: 'accessController'
        }).

        when('/reminder', {
            templateUrl: 'reminder.htm',
            controller: 'reminderController'
        }).

        when('/meeting', {
            templateUrl: 'meeting.htm',
            controller: 'meetingController'
        }).

        otherwise({
            redirectTo: '/access'
        });
}]);

dashboardApp.controller('accessController', function($scope) {
});

dashboardApp.controller('reminderController', function($scope) {
});

dashboardApp.controller('meetingController', function($scope) {
});
