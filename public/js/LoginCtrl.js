hexApp.controller('LoginCtrl', ['$scope', '$http', 'loginService',
        function($scope, $http, loginService) {
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

                var data = 'data='+JSON.stringify(loginDetails);
                $.post('login/isValidUserFromPost', data, function(data) {
                    if (data=="invalid") {
                        $("input[type='submit']").click(function(){
                            event.preventDefault();
                            $(".loginWarning").hide();
                            $(".loginWarning").fadeIn(200);
                        });
                    } else {
                        console.log(data);
                        loginService.getLoginId(function(data) {
                            console.log(data);
                        });
                    }
                });
            }

            /**
             * Register new login details. Receives 'success' if correct details,
             * 'error' otherwise.
             */
            $scope.registerUser = function(registerDetails) {

                // TODO: Refactor the empty checking
                if (!registerDetails) {
                    $scope.status = 'error';
                    return;
                }

                if ((!registerDetails.password) || (!registerDetails.email)) {
                    $scope.status = 'error';
                    return;
                }

                $http.post('register', registerDetails)
                .success(function(data, status, headers, config) {
                    console.log('success');
                    $scope.status = 'success';
                })
                .error(function(data, status, headers, config) {
                    $scope.status = 'error';
                });
            }
        }
]);
