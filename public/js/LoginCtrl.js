hexApp.controller('LoginCtrl', ['$scope', '$http', 
        function($scope, $http) {
            $scope.status = '';

            /**
             * Post details to server. Receives 'success' if correct login details,
             * 'error' otherwise.
             */
            $scope.checkLogin = function(loginDetails) {
                if (!loginDetails) {
                    $scope.status = 'error';
                    return;
                }
                if ((!loginDetails.password) || (!loginDetails.email)) {
                    $scope.status = 'error';
                    return;
                }

                $http.post('login', loginDetails)
                .success(function(data, status, headers, config) {
                    $scope.status = 'success';
                })
                .error(function(data, status, headers, config) {
                    $scope.status = 'error';
                });
            }

            /**
             * Register new login details. Receives 'success' if correct details,
             * 'error' otherwise.
             */
            $scope.registerLogin = function(registerDetails) {
                $http.post('register', registerDetails)
                .success(function(data, status, headers, config) {
                    $scope.status = 'success';
                })
                .error(function(data, status, headers, config) {
                    $scope.status = 'error';
                });
            }
        }
]);
