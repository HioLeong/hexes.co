hexApp.controller('SettingsCtrl', ['$scope', '$http', '$routeParams',
        function($scope, $http, $routeParams) {

            $scope.init = function() {
                $http.get('profile/getUserDetails/'+$routeParams.id)
                .success(function(data, status, headers, config) {
                    $scope.userDetails = data;
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
