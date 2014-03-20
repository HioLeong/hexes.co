hexApp.controller('SearchFriendsCtrl', ['$scope', '$http', '$routeParams', '$location', 'loginService',
        function($scope, $http, $routeParams, $location, loginService) {
            $scope.friends;

            $scope.init = function() {
                $scope.getAllUsers();
            };

            $scope.getAllUsers = function() {
                $http.get('profile/getAllUsers')
                .success(function(data, status, header, config) {
                    $scope.friends = data;
                    for (i = 0, il = $scope.friends.length; i < il; i++) {
                        $scope.friends[i].fullName = $scope.friends[i].firstName + ' ' + $scope.friends[i].surname;
                    }
                    console.log($scope.friends);
                });
            };

            $scope.goToFriend = function(friend) {
                console.log(friend);
                var id = friend.idUser;
                $location.path('/profile/'+id);
            };

            
            $scope.init();
        }
]);
