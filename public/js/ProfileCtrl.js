hexApp.config(['$routeProvider', 
        function($routeProvider) {
            $routeProvider.
            when('/profile/:id', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            })
            .when('/profile', {
                    templateUrl: 'partials/viewUserProfile.html',
                    controller: 'ProfileCtrl'
            })
            .when('/messages', {
                    templateUrl: 'partials/messagesInbox.html',
                    controller: 'ProfileCtrl'
            })
            .when('/settings', {
                    templateUrl: 'partials/register.html',
                    controller: 'SettingsCtrl'
            })
            .when('/login', {
                    templateUrl: 'partials/login.html',
                    controller: 'LoginCtrl'
            })
            .otherwise({
                    redirectTo: '/login'
            });
}]);

hexApp.controller('ProfileCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {
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

                // Fix the right panel height
                var leftColumnHeight = $('#leftColumn').height();
                document.getElementById("rightColumn").style.height = leftColumnHeight-17+"px";

                loginService.getLoginId(function(id) {
                    var getId = $routeParams.id || id;
                    if (($routeParams.id == id) || (!$routeParams.id)) {
                        $('#friendStatus').hide();
                    } else {
                        // See if they are already friends/friended
                        $http.get('profile/isFriends?currentUserId='+
                            id+'&'+'requestUserId='+$routeParams.id)
                        .success(function(data, status, headers, config) {
                            if (data == 'friends') {
                                $('#friendStatus').hide();
                            }
                        });
                    }

                    $http.get('/profile/getUserDetails/' + getId)
                    .success(function(data, status, headers, config) {
                        $scope.user = data;
                        $scope.getSchoolName();
                    });

                    $scope.getFriendsOfFriend();


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

            $scope.getSchoolName = function() {
                $.post('profile/getSchoolNameByUserId', 'id='+$scope.user.idUser, function(schoolName) {
                    $scope.user.school = schoolName;
                });
            };

            $scope.addFriend = function() {
                loginService.getLoginId(function(id) {
                    var currentUserId = id;
                    var requestUserId = $routeParams.id;
                    $http.get('profile/addFriend?currentUserId='+
                            currentUserId+'&'+'requestUserId='+requestUserId)
                        .success(function(data, status, header, config) {
                            console.log(data);
                        });
                });
            };

            $scope.getFriendsOfFriend = function() {
                loginService.getLoginId(function(id) {
                    var currentUserId = id;
                    var requestUserId = $routeParams.id;
                    $http.get('profile/getFriendsOfFriend?currentUserId='+
                            currentUserId+'&'+'requestUserId='+requestUserId)
                        .success(function(data, status, header, config) {
                            console.log(data);
                        });
                });
            };
        }
]);
