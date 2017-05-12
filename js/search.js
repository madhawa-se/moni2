var app = angular.module('myapp', ['ngRoute', 'ngSanitize','angular-bind-html-compile','rzModule']);

app.directive('shortlist', function ($http, $compile) {

    var addToList = function (target_id, callback) {
        $http({
            method: "POST",
            url: baseurl + "user/shortlist/" + target_id,
        }).then(function mySucces(response) {
            //alert(response.data);
            callback(target_id, true);
        }, function myError(response) {
            //alert(response.statusText);
            callback(target_id, false);
        });
    };
    return {
        restrict: 'E',
        transclude: 'true',

        template: '<a href="#"><span><i class="fa fa fa-star"></i><span></a>',
        link: function (scope, element, attr) {
            //var template='<a href="#"><span><i class="fa fa fa-star"></i><span></a>';
            //var content = $compile(template)(scope);
            //element.append(content);

            element.bind('click', function () {
                element.addClass("spin");
                addToList(attr.uid, callback);
            });
            var callback = function (id, state) {
                element.removeClass("spin");
                if (state) {
                    element.addClass("star");
                }
            };
        }
    };
});

app.controller('formViewCtrl', function ($scope, $http) {
    $scope.formView;
    $scope.loadForm = function (view) {
        $("#pre_formview").empty();
        $scope.formView = baseurl + "Search/get_form/" + view;
        $("#search_panel").collapse("show");
    };
    $scope.templateUrl = function () {
        return $scope.formView;
    }

});

app.controller('searchCTRL', function ($scope, $http, $filter) {
    $scope.priceSlider = 150;
    $scope.search = {};
    $scope.search.quick = {start: 0, end: 0, more: true, };
    $scope.search.advance = {start: 0, end: 0, more: true, };
    $scope.search.shortlist = {start: 0, end: 0, more: true, };


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
            $scope.searchResult += (response.data.data.result);
            $scope.search.quick.start += response.data.data.amount;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
    $scope.loadShortlist = function () {

        $scope.search.quick.start = 0;
        $(".pre-result").html("");
        $http({
            method: "POST",
            url: baseurl + "search/get_shortlist/" + $scope.search.quick.start,
        }).then(function mySucces(response) {
            console.log(response.data);
            $scope.quick_result += (response.data.data.result);
            $scope.search.quick.start += response.data.data.amount;
        }, function myError(response) {
            alert(response.statusText);
        });
    };

    $scope.fetchSearch = function () {
        $scope.searchResultx = "functioning...";
        $(".pre-result").html("");
        $("#search_panel").collapse("hide");
        //console.log( $(".search_panel").collapse("toggle"));
        var formData = $("#advance-search :input").filter(function (index, element) {
            return $(element).val() != "";
        }).serialize();

        $http({
            method: "POST",
            url: baseurl + "Search/advance_search/" + 0,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: formData
        }).then(function mySucces(response) {
            console.log(response.data);

            $scope.searchResultx = response.data.data.result;


            $scope.search.quick.start += response.data.data.amount;
        }, function myError(response) {
            alert(response.statusText);
        });
    };
});
