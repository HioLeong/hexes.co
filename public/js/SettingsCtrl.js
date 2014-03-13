hexApp.controller('SettingsCtrl', ['$scope', '$http',
        function($scope, $http) {
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

                $http.post('updateSettings', userDetails)
                .success(function(data, status, headers, config) {
                    console.log('success');
                    console.log(data);
                })
                .error(function(data, status, headers, config) {
                    console.log('error');
                    console.log(status);
                });
            };
        }
]);
