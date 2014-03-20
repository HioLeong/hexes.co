hexApp.controller('FriendsCtrl', ['$scope', '$http', '$routeParams', '$location', 'loginService',

        function($scope, $http, $routeParams, $location, loginService) {
            $scope.init = function() {
                if ($routeParams.id) {
                    $scope.getFriends($routeParams.id);
                } else {
                    loginService.getLoginId(function(id) {
                        $scope.getFriends(id);
                    });
                }
            };

            $scope.getFriends = function(id) {
                $http.get('profile/getFriends?requestUserId='+id)
                .success(function(data, status, header, config) {
                    $scope.friends = data;
                });
            };

            $scope.getAllFriends = function(id) {
};

            $scope.goToFriend = function(friend) {
                var id = friend.User_idUser1;
                $location.path('/profile/'+id);
            };

            $scope.init();
    }
]);
