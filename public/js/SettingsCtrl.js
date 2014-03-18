hexApp.controller('SettingsCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {

            $scope.init = function() {
                loginService.getLoginId(function(id) {
                    $http.get('profile/getUserDetails/'+id)
                    .success(function(data, status, headers, config) {
                        $scope.userDetails = data;
                    });
                });
            };

            $scope._convertDate = function(dateOfBirth) {
                return dateOfBirth.year + '-' + dateOfBirth.month + '-' + dateOfBirth.day;
            };

            $scope.updateUserDetails = function(userDetails) {
                if (!userDetails) {
                    $scope.status = 'error';
                    return;
                }

                if (userDetails) {
                    userDetails.dateOfBirth =
                        $scope._convertDate(userDetails.dateOfBirth);
                }

                var data = JSON.stringify(userDetails);
                console.log(data);

                $.post('settings/updateUserDetailsFromPost', 'data='+data, function(data) {
                    console.log(data);
                });
            };

            $scope.init();
        }
]);
