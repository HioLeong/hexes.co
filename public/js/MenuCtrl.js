hexApp.controller('MenuCtrl', ['$scope', '$http', '$timeout',
        function($scope, $http, $timeout) {
            $scope.numOfNotifications;

            (function tick() {
                    $http.get('profile/getNotifications')
                    .success(function(data, status, header, config) {
                        $scope.numOfNotifications = data.length;
                        $('#numOfNotifications').text(data.length);
                        $timeout(tick, 1000);
                    })
            })();
        }
]);
