hexApp.controller('LoginCtrl', ['$scope', '$http', 'loginService', '$location',
        function($scope, $http, loginService, $location) {
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
                            $(".loginWarning").hide();
                            $(".loginWarning").fadeIn(200);
                        });
                    } else {
                        console.log('Success!');
                        location.href="home#/profile";
                        loginService.getLoginId(function(data) {
                            console.log(data);
                        });
                    }
                });
            };

            /**
             * Register new login details. Receives 'success' if correct details,
             * 'error' otherwise.
             */
            $scope.registerUser = function(registerDetails) {
                console.log('what');

                if (!registerDetails) {
                    $scope.status = 'error';
                    return;
                }

                if ((!registerDetails.password) || (!registerDetails.email)) {
                    $scope.status = 'error';
                    return;
                }

                $.post('login/registerUserFromPost', 'data='+JSON.stringify(registerDetails), function(data) {
                    location.href="home#/settings";
                    console.log(data);
                });
            }
        }
]);
