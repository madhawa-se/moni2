var app = angular.module('myapp', ['ngRoute','ngSanitize']);

app.controller('searchCTRL', function ($scope, $http, $filter) {
    $scope.search = {};
    $scope.quick_result="waiting";
    $scope.search.quick = {start: 0, end: 0, more: true, };


    $scope.loadQuick = function () {
        var formData = $("#quick-search :input").filter(function (index, element) {
            return $(element).val() != "";
        }).serialize();
        $http({

            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            method: "POST",
            url: baseurl + "search/quick_search_base/" + $scope.search.quick.start,
            data: formData,
        }).then(function mySucces(response) {
            console.log(response.data);
             $scope.quick_result=(response.data.data.result);
        }, function myError(response) {
            alert(response.statusText);
        });
    };
});
