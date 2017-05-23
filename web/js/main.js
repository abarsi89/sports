var symfony = angular.module('symfony', []);

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