app.controller('mailCTRL', function ($scope, $http) {

    $scope.message = {};
    $scope.message.boxes = {
        inbox: {name: 'inbox', url: "get_inbox"},
        outbox: {name: 'outbox', url: "get_outbox"},
        draft: {name: 'draft', url: "get_draftbox"}
    };
    $scope.message.emails = [];
    $scope.message.content;
    $scope.message.to;

    $scope.message.compose = function () {
        $http({
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            method: 'POST',
            data: "to=" + $scope.message.to + "&message=" + $scope.message.content,
            url: baseurl + "message/compose",

        }).then(function successCallback(response) {
            alert('sent');
        }, function errorCallback(response) {
            alert("error");
        }
        );
    };
    $scope.deleteMsg = function () {
        var deletes = $.grep($scope.message.emails, function (email) {
            return email.state === true;
        });
        if (deletes.length>0){
            $("#confirm-model").modal("show");
        }

    }

    $scope.loadMessages = function (box) {
        $scope.ajxLoad($scope.message.boxes[box]);
    }

    $scope.ajxLoad = function (box) {
        console.log(box);
        $http({
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            method: 'POST',
            //data: "to=" + $scope.to + "&message=" + $scope.message,
            url: baseurl + "message/" + box.url,

        }).then(function successCallback(response) {
            $scope.handleResponce(response.data, box);
        }, function errorCallback(response) {
            alert("error");
        }
        );
    }

    $scope.handleResponce = function (data, box) {
        if (data.state == true) {
            $scope.message.emails = data.data;
        } else {
            alert("responce error");
        }
    }
    $scope.showMsgModel = function (to) {
        if (to !== null) {
            $scope.message.to = to;
        }
        $("#myModal").modal('show');
    }
    //$scope.loadMessages();
});