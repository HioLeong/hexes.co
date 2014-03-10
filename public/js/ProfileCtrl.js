hexApp.config(['$routeProvider', 
        function($routeProvider) {
            $routeProvider.
            when('/profile/:id', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            })
            .when('/messages', {
                    templateUrl: 'partials/messagesInbox.html',
                    controller: 'ProfileCtrl'
            })
            .when('/settings/:id', {
                    templateUrl: 'partials/register.html',
                    controller: 'SettingsCtrl'
            });
}]);

hexApp.controller('ProfileCtrl', ['$scope', '$http', '$routeParams',
        function($scope, $http, $routeParams) {
            $scope.user;
            $scope.genderCode = {
                '0': 'Male',
                '1': 'Female'
            };
            $scope.relStatusCode = {
                '1': 'Single',
                '2': 'In a Relationship',
                '3': 'Jason/In a Friendzone',
                '4': 'Side Chick',
                '5': 'Tinder'
            };

            $scope.getUser = function() {
                    $http.post('/getUser/' + $routeParams.id)
                    .success(function(data, status, headers, config) {
                        $scope.user = data;
                        console.log(data);
                    });
            };

            $scope.getGenderFromCode = function(genderCode) {
                return $scope.genderCode[genderCode];
            };

            $scope.getRelStatusFromCode = function(relStatusCode) {
                return $scope.relStatusCode[relStatusCode];
            };
        }
]);
