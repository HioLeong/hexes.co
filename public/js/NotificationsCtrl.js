hexApp.controller('NotificationsCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
            $scope.notifications = [1,2,3];
            $scope.getNotifications = function() {
                $http.get('profile/getNotifications')
                .success(function(data, status, header, config) {
                    $scope.notifications = data;
                });
            };
        }
]);
