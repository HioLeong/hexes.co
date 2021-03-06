hexApp.controller('MessagesCtrl', ['$scope', '$http', '$routeParams', 'loginService',
        function($scope, $http, $routeParams, loginService) {

            $scope.bubbleText = "bubble-me";
            $scope.conversations;
            $scope.nameTo;
            $scope.nameFrom;

            $scope.init = function() {
                $scope.getAllMessages();
                $scope.getAllConversations();
                loginService.getLoginId(function(id) {
                    var idTo = $routeParams.id;
                    $scope.getNameByIds(id, idTo);
                });
            };

            $scope.populateMessages = function(id) {
                $http.get('messages/getMessagesFromGet?currentUserId='+id+'&requestUserId='+$routeParams.id)
                .success(function(data, status, header, config) {
                    var array0 = jQuery.parseJSON(data[0]);
                    var array1 = jQuery.parseJSON(data[1]);
                    $scope.messages = array0.concat(array1);
                    $scope.messages.sort(function(a,b){
                        return new Date(a.date) - new Date(b.date);
                    });
                    var msv = $('#messagesScrollViewer');
                    var height = msv[0].scrollHeight;
                    msv.scrollTop(height);
                });
            };

            $scope.sendMessage = function() {
                loginService.getLoginId(function(id) {
                    var data = {};
                    data.message = $scope.message;
                    data.fromId = id;
                    data.toId = $routeParams.id;
                    $('#messageBox').val('');
                    $.post('messages/sendMessageByPost', 'data='+ JSON.stringify(data),
                        function(data) {
                            $scope.getAllMessages();
                        }
                    );
                });
            };

            $scope.getNameByIds = function(idTo, idFrom) {
                $http.get('profile/getUserDetails/'+idTo) 
                .success(function(data, status, header, config) {
                    $scope.nameTo = data.firstName;
                });
                $http.get('profile/getUserDetails/'+idFrom)
                .success(function(data, status, header, config) {
                    $scope.nameFrom = data.firstName;
                });
            };

            $scope.getName = function(id) {
                if ($routeParams.id == id) {
                    return $scope.nameTo;
                } else {
                    return $scope.nameFrom;
                }
            };

            $scope.getBubbleText = function(bubbleId) {
                if (bubbleId == $routeParams.id) {
                    return 'bubble-other';
                } else {
                    return 'bubble-me';
                }
            };


            $scope.getAllMessages = function() {
                loginService.getLoginId($scope.populateMessages);
            };

            $scope.getAllConversations = function() {
                $http.get('messages/getConversation')
                .success(function(data, status, header, config) {
                    var conversationIds = [];
                    console.log(data);
                    for (i = 0, il = data.length; i < il; i++) {
                        if (conversationIds.indexOf(data[i].idUserFrom) == -1) {
                            conversationIds.push(data[i].idUserFrom)
                        }

                        if (conversationIds.indexOf(data[i].idUserTo) == -1) {
                            conversationIds.push(data[i].idUserTo)
                        }
                    }
                    // Wow, much inefficient
                    $http.get('profile/getNamesByIds/'+JSON.stringify(conversationIds))
                    .success(function(data, status, header, config) {
                        $scope.conversations = data;
                    });
                });
            };

            $scope.init();
        }
]);
