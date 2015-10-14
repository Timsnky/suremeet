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
            console.log($scope.meetings);
        });

    //var meeting = [];
    //meeting = angular.fromJson(#scope.meetings);
    ////var meetingsArray = $scope.meetings;
    //console.log($scope.meetings);
    //angular.forEach($scope.meetings, function(item){
    //    console.log(item.date);
    //})
});

schedulesApp.controller('listController', function($scope) {
    $scope.message ="Hellvzsdfvdfvxdfvdvf";
});
