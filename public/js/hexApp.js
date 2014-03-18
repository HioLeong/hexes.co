var hexApp = angular.module('hexApp',['ngRoute']);

hexApp.factory('loginService', ['$rootScope', '$http',
        function($rootScope, $http) {
            var loginService = {};
            loginService.id = null;

            loginService.getLoginId = function(e) {
                $http.get('login/getSessionUserId')
                .success(function(data, status, header, config) {
                    e(data);
                })
                .error(function(data, status, header, config) {

                });
            };

            loginService.logOff = function() {
                $http.get('login/logOut')
                .success(function(data, status, header, config) {
                    console.log(data);
                });
                $rootScope.broadcast('loggedOff');
            };

            return loginService;
    }
]);

hexApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('((');
    $interpolateProvider.endSymbol('))');
});
