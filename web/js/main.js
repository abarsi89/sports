var symfony = angular.module('symfony', []);

symfony.controller('americanFootballController', function($scope, $http) {
    $http.get('americanFootball/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
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