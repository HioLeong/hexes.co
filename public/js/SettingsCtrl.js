hexApp.controller('SettingsCtrl', ['$scope', '$http',
        function($scope, $http) {
            /**
             * 
             */
            $scope.updateUserDetails = function(userDetails) {
                if (!userDetails) {
                    $scope.status = 'error';
                    return;
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
