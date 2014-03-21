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
                    var ids = [];
                    var names = [];
                    for (i = 0, il = data.length; i < il; i++) {
                        ids.push(data[i].User_idUser);
                    }

                    $http.get('profile/getNamesByIds/'+JSON.stringify(ids))
                    .success(function(data, status, header, config) {
                        $scope.notifications = data;
                    });
                });
            };

            $scope.init();
        }
]);
