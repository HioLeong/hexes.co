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
            })
            .when('/login', {
                    templateUrl: 'partials/login.html',
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

            $scope.getFormattedDate = function(dateString) {
                var date = new Date(dateString);
                console.log(date.getDate());
                month = "January,February,March,April,May,June,July,August,September,October,November,December"
                .split(",")[date.getMonth()];
                return date.getDate() + $scope.nth(date.getDate()) + ' ' + month + ', ' + date.getFullYear();
            };

            $scope.nth = function(day) {
                if(day>3 && day<21) return 'th'; // thanks kennebec
                switch (day % 10) {
                case 1:  return "st";
                case 2:  return "nd";
                case 3:  return "rd";
                default: return "th";
                }
            };
        }
]);
