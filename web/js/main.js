var symfony = angular.module('symfony', []);

/*symfony.controller('bodyController', function($scope, $http) {
    $http.get('users/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});*/

symfony.controller('baseballController', function($scope, $http) {
    $http.get('baseball/list')
        .then(function(response) {
            $scope.users = response.data;
            console.log($scope.users);
        });
});