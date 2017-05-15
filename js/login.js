var app = angular.module('myapp');

app.controller('loginController', function ($scope, $http, $filter) {
    $scope.loginSubmitted = false;
    $scope.submitLogin = function ($event, $valid) {
        if (!$valid) {
            $event.preventDefault();
        }
    };
    

});
