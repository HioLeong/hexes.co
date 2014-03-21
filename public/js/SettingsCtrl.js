hexApp.controller('SettingsCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {

            $scope.init = function() {
                var genderWidth = $('.email').width();
                genderWidth = (genderWidth / 2)*0.98;
                $(".register>form>fieldset>#leftProfile>.toggle>.toggle-label").css('width',genderWidth);
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

                if (userDetails.dateOfBirth) {
                    userDetails.dateOfBirth =
                        $scope._convertDate(userDetails.dateOfBirth);
                }

                var data = JSON.stringify(userDetails);
                $.post('settings/updateUserDetailsFromPost', 'data='+data, function(data) {
                    console.log(data);
                });
            };

            $scope.init();
        }
]);
