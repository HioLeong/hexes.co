var hexApp = angular.module('hexApp',['ngRoute']);

hexApp.factory('loginService', ['$rootScope',
        function() {
            var loginService = {};
            loginService.id = null;

            loginService.setLoginId = function(id) {
                loginService.id = id;
            };

            loginService.getLoginId = function() {
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
