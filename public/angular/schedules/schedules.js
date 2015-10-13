var schedulesApp = angular.module("schedulesApp", ['ngRoute']);

schedulesApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

schedulesApp.factory('Meeting', function($http) {
    return {
        get : function() {
            return $http.get('/api/meetings');
        }
    }
})

schedulesApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider.

        when('/columns', {
            templateUrl: 'columns.htm',
            controller: 'columnsController'
        }).

        when('/list', {
            templateUrl: 'list.htm',
            controller: 'listController'
        }).

        otherwise({
            redirectTo: '/columns'
        });
}]);

//schedulesApp.filter('meetingByDate', function() {
//    return function
//})

schedulesApp.controller('columnsController', function($scope, $http, Meeting) {
    $scope.message = "Testing";
    Meeting.get()
        .then(function(response){
           $scope.meetings = response.data;
        });
});

schedulesApp.controller('listController', function($scope) {
    $scope.message ="Hellvzsdfvdfvxdfvdvf";
});
