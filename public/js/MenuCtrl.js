hexApp.controller('MenuCtrl', ['$scope', '$http', '$timeout', 'searchService',
        function($scope, $http, $timeout, searchService) {
            $scope.numOfNotifications;

            $scope.search = function() {
                searchService.search($scope.searchText);
            };

            $scope.goToSearchFriends = function() {
                location.href="home#/searchFriends";
            };

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
