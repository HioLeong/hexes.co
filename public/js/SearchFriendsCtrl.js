hexApp.controller('SearchFriendsCtrl', ['$scope', '$http', '$routeParams', '$location', 'loginService', 'searchService', '$rootScope', '$filter',
        function($scope, $http, $routeParams, $location, loginService, searchService, $rootScope, $filter) {
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
                    $scope.fullFriends = $scope.friends;
                });
            };

            $scope.goToFriend = function(friend) {
                console.log(friend);
                var id = friend.idUser;
                $location.path('/profile/'+id);
            };

            $scope.$on('searching', function() {
                $scope.friends = $filter('filter')($scope.fullFriends, searchService.getMessage());
            });


            $scope.init();
        }
]);
