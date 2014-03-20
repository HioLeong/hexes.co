hexApp.controller('MessagesCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {

            $scope.init = function() {
                $scope.getAllMessages();
            };

            $scope.populateMessages = function(id) {
                $http.get('messages/getMessagesFromGet?currentUserId='+id+'&requestUserId='+$routeParams.id)
                .success(function(data, status, header, config) {
                    var array0 = jQuery.parseJSON(data[0]);
                    var array1 = jQuery.parseJSON(data[1]);
                    $scope.messages = array0.concat(array1);
                });
            };

            $scope.sendMessages() {
            }

            $scope.getAllMessages = function() {
                loginService.getLoginId($scope.populateMessages);
            };

            $scope.init();
        }
]);
