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
                });
                $rootScope.broadcast('loggedOff');
            };

            return loginService;
    }
]);

hexApp.factory('searchService', ['$rootScope', '$http',
        function($rootScope, $http) {
            var searchService = {};

            searchService.message;

            searchService.getMessage = function() {
                return searchService.message;
            }

            searchService.broadcastSearch = function() {
                $rootScope.$broadcast('searching');
            };

            searchService.search = function(message) {
                searchService.message = message;    
                searchService.broadcastSearch();
            };

            return searchService;
    }
]);


hexApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('((');
    $interpolateProvider.endSymbol('))');
});


window.onload = function() {
    $('li.mobileTwoColumn').click(function(e) {
        $('li.current').removeClass('current');
        $(this).addClass('current');
    });
};
