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
                    // Error Handler
                });
            };

            loginService.logOff = function() {
                loginService.id = null;
                $rootScope.broadcast('loggedOff');
            };

            return loginService;
    }
]);

hexApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('((');
    $interpolateProvider.endSymbol('))');
});
