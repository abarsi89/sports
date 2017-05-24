var symfony = angular.module('symfony', []);

symfony.controller('americanFootballController', function($scope, $http) {
    $http.get('americanFootball/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
    $scope.update = function(row){
        console.log(row);
        $scope.edited = row;
    };
    $scope.save = function(updated){
        console.log(updated);
        $data = updated;
        $http.post('americanFootball/list', $data)
            .then(function(response){
            console.log(response.data);
        });
        //$scope.edited = row;
    };
    $scope.delete = function(row){
        console.log(row);
        $scope.edited = row;
    };
});

symfony.controller('baseballController', function($scope, $http) {
    $http.get('baseball/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});

symfony.controller('basketballController', function($scope, $http) {
    $http.get('basketball/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});

symfony.controller('iceHockeyController', function($scope, $http) {
    $http.get('iceHockey/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});

symfony.controller('motorRacingController', function($scope, $http) {
    $http.get('motorRacing/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});

symfony.controller('soccerController', function($scope, $http) {
    $http.get('soccer/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});

symfony.controller('tennisController', function($scope, $http) {
    $http.get('tennis/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});