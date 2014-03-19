hexApp.controller('FriendsCtrl', ['$scope', '$http', '$routeParams', 'loginService',

        function($scope, $http, $routeParams, loginService) {

            $scope.friends;

            $scope.init = function() {
                $scope.getFriends($routeParams.id);
            };

            $scope.getFriends = function(id) {
                $http.get('profile/getFriends?requestUserId='+id)
                .success(function(data, status, header, config) {
                    $friends = data;
                });
            };

            $scope.init();
    }
]);
