hexApp.controller('NotificationsCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
            $scope.notifications;
            
            $scope.init = function() {
                $scope.getNotifications();
            };

            $scope.getNotifications = function() {
                $http.get('profile/getNotifications')
                .success(function(data, status, header, config) {
                    $scope.notifications = data;
                });
            };

            $scope.init();
        }
]);
